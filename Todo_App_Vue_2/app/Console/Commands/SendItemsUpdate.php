<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Item;
use Illuminate\Support\Facades\Mail;
use App\Mail\ItemsUpdate;

class SendItemsUpdate  extends Command
{
    protected $signature = 'send:itemsupdate';
    protected $description = 'Send an email with all items and their updates every 5 minutes.';

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
