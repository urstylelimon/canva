<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\Item;

class SendAllItemsNotification extends Notification
{
    use Queueable;

    public $items;

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $mailMessage = new MailMessage;
        $mailMessage->subject('Items List')
                    ->greeting('Hello! Here is the list of all items:')
                    ->line('Below are the items currently stored:');

        foreach ($this->items as $item) {
            $mailMessage->line($item->name . ' - Due: ' . $item->due_date . ' ' . $item->due_time);
        }

        return $mailMessage;
    }
}
