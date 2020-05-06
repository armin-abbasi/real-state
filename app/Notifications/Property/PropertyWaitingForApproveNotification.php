<?php

namespace App\Notifications\Property;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PropertyWaitingForApproveNotification extends Notification
{
    use Queueable;

    private $propertyId;

    /**
     * Create a new notification instance.
     *
     * @param $propertyId
     */
    public function __construct($propertyId)
    {
        $this->propertyId = $propertyId;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('Dear ' . $notifiable->name)
                    ->line('Your property with ID: ' . $this->propertyId . ' is created and waiting for approval by our admins.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
