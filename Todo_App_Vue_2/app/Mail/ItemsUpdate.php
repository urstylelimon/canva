<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ItemsUpdate extends Mailable
{
    use Queueable, SerializesModels;

    public $items;

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function build()
    {
        return $this->from('example@example.com')
                   ->subject('Items Update')
                   ->view('emails.items_update');
    }
}
