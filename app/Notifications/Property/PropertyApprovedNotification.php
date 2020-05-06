<?php

namespace App\Notifications\Property;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PropertyApprovedNotification extends Notification
{
    use Queueable;

    /**
     * @var int $propertyId
     */
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
                    ->line('Your property with ID: ' . $this->propertyId . ' has been approved.');
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
