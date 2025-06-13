<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

use App\Models\Tenant;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use App\Rules\ValidTenantSlug;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * Show the registration form
     */
    public function showRegistrationForm()
    {
        $plans = [
            'free' => [
                'name' => 'Starter',
                'price' => 0,
                'features' => [
                    'Up to 5 services',
                    'Basic booking calendar',
                    'Email notifications',
                    'M-Pesa payments'
                ],
                'recommended' => false
            ],
            'pro' => [
                'name' => 'Professional',
                'price' => 2999,
                'features' => [
                    'Unlimited services',
                    'Advanced calendar',
                    'SMS & WhatsApp notifications',
                    'Staff accounts',
                    'Reporting dashboard'
                ],
                'recommended' => true
            ],
            'business' => [
                'name' => 'Business',
                'price' => 5999,
                'features' => [
                    'Everything in Pro',
                    'Custom branding',
                    'Priority support',
                    'API access',
                    'Dedicated account manager'
                ],
                'recommended' => false
            ]
        ];

        return view('auth.register', compact('plans'));
    }

    /**
     * Handle registration request
     */
    public function register(Request $request)
    {
        $validated = $this->validateRequest($request);
        DB::beginTransaction();

        try {

            $business = $this->createBusiness($validated);

            $user = $this->createUser($validated, $business);

            $this->createBusinessHours($validated, $business);

            if ($validated['plan'] !== 'free') {
                $this->processPayment(
                    $request->payment_method,
                    $validated['plan'] === 'pro' ? 2999 : 5999,
                    $request->payment_phone,
                    "Subscription payment for {$request->company_name}",
                    $business
                );

                $business->update([
                    'subscription_status' => 'active',
                    'subscription_ends_at' => now()->addMonth(),
                ]);
            }

            if ($request->has('team_members')) {
                foreach ($request->team_members as $member) {
                    $this->inviteTeamMember($business, $user, $member);
                }
            }

            event(new Registered($user));
            // After tenant and user creation:
            event(new \App\Events\TenantRegistered($business, $user));

            // Send welcome email
            $user->notify(new \App\Notifications\WelcomeBusinessOwner($business));

            DB::commit();

            auth()->login($user);

            return redirect()->route('onboarding.step1', $business)
                ->with('success', 'Business registered successfully!');

            // return redirect()->route('dashboard')
            //     ->with('success', 'Your business account has been created successfully!');
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Business registration failed: ' . $e->getMessage());

            return back()->withInput()
                ->with('error', 'Registration failed. Please try again.');
        }
    }

    protected function validateRequest(Request $request)
    {
        return $request->validate([
            // Business Information
            'company_name' => 'required|string|max:255',
            'slug' => ['required', 'string', 'max:50', new ValidTenantSlug],

            // Business Details
            'business_type' => 'required|string|in:salon,barber,spa,clinic,other',
            'description' => 'nullable|string|max:200',
            'business_hours' => 'required|array',
            'business_hours.*.enabled' => 'sometimes|boolean',
            'business_hours.*.start' => 'required_with:business_hours.*.enabled|date_format:H:i',
            'business_hours.*.end' => 'required_with:business_hours.*.enabled|date_format:H:i|after:business_hours.*.start',

            // Owner Information
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'phone' => 'required|string|max:20',
            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'
            ],

            // Plan Selection
            'plan' => 'required|string|in:free,pro,premium',

            // Payment
            'payment_method' => 'required_if:plan,pro,premium|nullable|in:mpesa,stripe',
            'payment_phone' => 'required_if:payment_method,mpesa|nullable|string|max:20',
            'terms' => 'required|accepted',

            // Team Members
            'team_members' => 'nullable|json',
        ], [
            'password.regex' => 'The password must contain at least one uppercase letter, one lowercase letter, one number and one special character.',
            'business_hours.*.end.after' => 'The closing time must be after the opening time.',
        ]);
    }

    protected function createUser(array $data, Tenant $tenant)
    {
        return User::create([
            'tenant_id' => $tenant->id,
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'email_verified_at' => now(),
            'role' => 'owner',
        ]);
    }

    protected function createBusiness(array $data)
    {
        return Tenant::create([
            'company_name' => $data['company_name'],
            'slug' => Str::slug($data['slug']),
            'business_type' => $data['business_type'],
            'description' => $data['description'] ?? null,
            'email' => $data['email'],
            'phone' => $data['phone'],
            'subscription_plan' => $data['plan'],
            'subscription_status' => $data['plan'] === 'free' ? 'active' : 'pending_payment',
            'settings' => [
                'timezone' => 'Africa/Nairobi',
                'currency' => 'KES',
                'locale' => 'en',
            ],
        ]);
    }

    protected function createBusinessHours(array $data, Tenant $business)
    {
        $days = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
        $businessHours = [];

        foreach ($days as $day) {
            if (isset($data['business_hours'][$day]['enabled'])) {
                $businessHours[] = [
                    'day' => $day,
                    'open_time' => $data['business_hours'][$day]['start'],
                    'close_time' => $data['business_hours'][$day]['end'],
                    'is_open' => (bool) $data['business_hours'][$day]['enabled'],
                ];
            }
        }

        $business->hours()->createMany($businessHours);
    }

    protected function createTeamMembers(string $teamMembersJson, Tenant $business)
    {
        $teamMembers = json_decode($teamMembersJson, true);

        if (!is_array($teamMembers)) {
            return;
        }

        foreach ($teamMembers as $member) {
            if (!empty($member['email'])) {
                // Check if user exists
                $user = User::firstOrNew(['email' => $member['email']]);

                if (!$user->exists) {
                    // Create new user with temporary password
                    $user->fill([
                        'first_name' => explode('@', $member['email'])[0],
                        'last_name' => '',
                        'phone' => '',
                        'password' => Hash::make('@Bookwise2025'),
                        'role' => $member['role'] ?? 'staff',
                    ])->save();

                    // TODO: Send invitation email
                }

                // Attach to business with role
                $business->employees()->attach($user->id, [
                    'role' => $member['role'] ?? 'staff',
                    'status' => 'pending' // Requires acceptance
                ]);
            }
        }
    }

    private function processPayment($method, $amount, $phone, $description, $tenant)
    {
        switch ($method) {
            case 'mpesa':
                $phone = $this->formatPhoneNumber($phone);

                // TODO: Implement actual M-Pesa payment logic

                break;

            case 'stripe':
                // Process Stripe payment
                // TODO: Implement Stripe payment logic
                break;
        }
    }

    private function inviteTeamMember($tenant, $inviter, $member)
    {
        $invitation = $tenant->invitations()->create([
            'inviter_id' => $inviter->id,
            'email' => $member['email'],
            'role' => $member['role'] ?? 'staff',
            'token' => Str::random(60),
            'expires_at' => now()->addDays(7),
        ]);

        $invitation->notify(new \App\Notifications\TeamInvitation($invitation));
    }

    protected function formatPhoneNumber($phone)
    {
        // Format phone number for M-Pesa (e.g. 254712345678)
        $phone = preg_replace('/[^0-9]/', '', $phone);

        if (strlen($phone) === 9 && strpos($phone, '0') === 0) {
            return '254' . substr($phone, 1);
        }

        if (strlen($phone) === 10 && strpos($phone, '0') === 0) {
            return '254' . substr($phone, 1);
        }

        return $phone;
    }
}
