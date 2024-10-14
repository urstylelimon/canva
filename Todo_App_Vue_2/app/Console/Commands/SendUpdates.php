<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Models\Item;

use App\Mail\ItemsUpdate;

class SendUpdates extends Command
{
    protected $signature = 'send:updates';
    protected $description = 'Send an email update every minute.';

    public function handle()
    {
        $items = Item::all(); // Fetch all items

        if ($items->isEmpty()) {
            $this->info('No items to update.');
            return;
        }

        Mail::to('nur.ambalait@gmail.com')->send(new ItemsUpdate($items));
        $this->info('Email sent with items updates.');
    }
}
