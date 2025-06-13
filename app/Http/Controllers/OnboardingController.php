<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OnboardingController extends Controller
{
    public function showStep1(Tenant $tenant)
    {
        return view('onboarding.step1', [
            'tenant' => $tenant,
            'step' => 1,
            'totalSteps' => 3
        ]);
    }

    public function completeStep1(Request $request, Tenant $tenant)
    {
        $request->validate([
            'logo' => 'nullable|image|max:2048',
            'services' => 'required|array|min:1',
            'services.*.name' => 'required|string|max:255',
            'services.*.duration' => 'required|integer|min:1',
            'services.*.price' => 'required|numeric|min:0',
        ]);

        // Handle logo upload
        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('logos', 'public');
            $tenant->update(['logo_path' => $path]);
        }

        // Create services
        foreach ($request->services as $service) {
            $tenant->services()->create($service);
        }

        return redirect()->route('onboarding.step2', $tenant);
    }

    public function showStep2(Tenant $tenant)
    {
        return view('onboarding.step2', [
            'tenant' => $tenant,
            'step' => 2,
            'totalSteps' => 3
        ]);
    }

    public function completeStep2(Request $request, Tenant $tenant)
    {
        $request->validate([
            'staff' => 'required|array|min:1',
            'staff.*.name' => 'required|string|max:255',
            'staff.*.email' => 'required|email',
        ]);

        // Create staff members
        foreach ($request->staff as $staffMember) {
            $tenant->staff()->create([
                'name' => $staffMember['name'],
                'email' => $staffMember['email'],
                'password' => bcrypt(Str::random(16)),
                'role' => 'staff'
            ]);
        }

        return redirect()->route('onboarding.step3', $tenant);
    }

    public function showStep3(Tenant $tenant)
    {
        return view('onboarding.step3', [
            'tenant' => $tenant,
            'step' => 3,
            'totalSteps' => 3
        ]);
    }

    public function completeOnboarding(Tenant $tenant)
    {
        $tenant->update(['onboarding_completed' => true]);
        return redirect()->route('dashboard')->with('success', 'Onboarding completed!');
    }
}