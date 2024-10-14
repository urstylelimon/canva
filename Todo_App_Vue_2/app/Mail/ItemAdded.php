<?php

namespace App\Mail;

use App\Models\Item;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ItemAdded extends Mailable
{
    use Queueable, SerializesModels;

    public $item;

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    public function build()
    {
        return $this->from('nur.ambalait@gmail.com')
                    ->subject('New Item Added')
                    ->view('emails.item_added');
    }
}
