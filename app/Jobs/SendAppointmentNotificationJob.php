<?php

namespace App\Jobs;

use App\Models\Notification;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentNotificationMail;

class SendAppointmentNotificationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $notification;

    /**
     * Create a new job instance.
     */
    public function __construct(Notification $notification)
    {
        $this->notification = $notification;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try {
            $appointment = $this->notification->appointment;
            $tenant = $appointment->tenant;
            $client = $appointment->client;

            $message = $this->buildMessage($this->notification->type, $appointment);

            switch ($this->notification->channel) {
                case 'sms':
                    $this->sendSms($client->phone, $message);
                    break;

                case 'whatsapp':
                    $this->sendWhatsApp($client->phone, $message);
                    break;

                case 'email':
                    $this->sendEmail($client->email, $message, $appointment);
                    break;
            }

            $this->notification->update([
                'status' => 'sent',
                'sent_at' => now(),
                'message' => $message
            ]);

        } catch (\Exception $e) {
            $this->notification->update([
                'status' => 'failed',
                'message' => $e->getMessage()
            ]);

            throw $e;
        }
    }

    protected function buildMessage($type, $appointment)
    {
        $tenant = $appointment->tenant;
        $service = $appointment->service;
        $staff = $appointment->staff;

        $templates = [
            'confirmation' => "Hello {$appointment->client->name}, your appointment for {$service->name} with {$staff->user->name} at {$tenant->company_name} has been confirmed for {$appointment->start_time->format('l, F jS \\a\\t g:i A')}. Thank you!",
            'reminder' => "Reminder: You have an appointment for {$service->name} with {$staff->user->name} at {$tenant->company_name} tomorrow at {$appointment->start_time->format('g:i A')}.",
            'cancellation' => "Your appointment for {$service->name} with {$staff->user->name} at {$tenant->company_name} on {$appointment->start_time->format('l, F jS \\a\\t g:i A')} has been cancelled."
        ];

        return $templates[$type] ?? $templates['confirmation'];
    }

    protected function sendSms($phone, $message)
    {
        $apiKey = config('services.africas_talking.api_key');
        $username = config('services.africas_talking.username');

        $response = Http::withBasicAuth($username, $apiKey)
            ->post('https://api.africastalking.com/version1/messaging', [
                'username' => $username,
                'to' => $phone,
                'message' => $message,
                'from' => config('services.africas_talking.sender_id')
            ]);

        if (!$response->successful()) {
            throw new \Exception('Failed to send SMS: ' . $response->body());
        }
    }

    protected function sendWhatsApp($phone, $message)
    {
        $token = config('services.whatsapp.token');
        $phoneId = config('services.whatsapp.phone_id');

        $response = Http::withToken($token)
            ->post("https://graph.facebook.com/v13.0/{$phoneId}/messages", [
                'messaging_product' => 'whatsapp',
                'to' => $phone,
                'type' => 'text',
                'text' => ['body' => $message]
            ]);

        if (!$response->successful()) {
            throw new \Exception('Failed to send WhatsApp message: ' . $response->body());
        }
    }

    protected function sendEmail($email, $message, $appointment)
    {
        $tenant = $appointment->tenant;
        $subject = "Appointment {$appointment->status} - {$tenant->company_name}";

        Mail::to($email)->send(new AppointmentNotificationMail($subject, $message, $appointment));
    }
}