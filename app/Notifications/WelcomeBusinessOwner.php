<?php

namespace App\Notifications;

use App\Models\Tenant;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WelcomeBusinessOwner extends Notification
{
    use Queueable;

    protected $tenant;

    public function __construct(Tenant $tenant)
    {
        $this->tenant = $tenant;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Welcome to Bookwise!')
            ->greeting("Hello {$notifiable->name},")
            ->line("Thank you for registering your business {$this->tenant->company_name} on Bookwise.")
            ->line("Your booking URL: https://{$this->tenant->slug}.bookwise.co.ke")
            ->action('Go to Dashboard', url('/dashboard'))
            ->line('Need help getting started? Check out our documentation or contact support.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
