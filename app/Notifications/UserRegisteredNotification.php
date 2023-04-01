<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;

class UserRegisteredNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['telegram'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toTelegram($notifiable)
    {
        $message = 'New Blog Posted' . "\n\n";
        $message .= 'School: ' . $notifiable->school . "\n";
        $message .= 'First Name: ' . $notifiable->first_name . "\n";
        $message .= 'Last Name: ' . $notifiable->last_name . "\n";
        $message .= 'Registration Number: ' . $notifiable->registration_number . "\n";
        $message .= 'email: ```' . $notifiable->email . "```\n\n";

        return TelegramMessage::create()
            ->to('-960663840')
            ->content("UP \n\n" . $message);
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
