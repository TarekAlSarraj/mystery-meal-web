<?php

namespace App\Notifications;

use ILluminate\Support\Facades\Auth;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UpdateIsMade extends Notification
{
    use Queueable;

    protected $arr_of_changes;
    protected $original_arr;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(array $arr_of_changes, array $original_arr)
    {
        $this->arr_of_changes = $arr_of_changes;
        $this->original_arr = $original_arr;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail' , 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
       

        return (new MailMessage)->view('emails.updateismade' , ['arr_of_changes' => $this->arr_of_changes , 
        'original_arr' => $this->original_arr]);
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
            'arr_of_changes' => $this->arr_of_changes , 
            'original_arr' => $this->original_arr
        ];
    }
}
