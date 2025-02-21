<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendEmailCofirmAppointment extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public $appointment;
    public $message;
    public function __construct($appointment)
    {
        $this->appointment = $appointment;
        if($this->appointment->status == 'confirmed'){
            $this->message = 'The appointment has been successfully confirmed';
        }else{
            $this->message = 'The appointment has been cancelled';
        }
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('hello ' . $this->appointment->user->name)
                    ->line($this->message)
                    ->action('Notification Action', url('/'))
                    ->line('Your appointment is on a date ' . $this->appointment->date . ' at the hour ' . $this->appointment->timeSlot->start_time . ' we are honored to visit you in our clinic')
                    ->line('Thank you for using our application!');
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
