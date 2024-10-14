<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Item;
use Illuminate\Support\Facades\Mail;
use App\Mail\ItemAdded;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class SendPreItemNotification extends Command
{
    protected $signature = 'notify:preitem';
    protected $description = 'Send a notification email 30 minutes before an item is due.';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $items = Item::where('completed', false)->get();
        $now = Carbon::now();
    
        foreach ($items as $item) {
            $itemDateTime = Carbon::parse($item->day_of_week . ' ' . $item->time_of_day);
            // Calculate the time difference in minutes
            $timeDifference = $now->diffInMinutes($itemDateTime, false);
    
            // Check if the time difference is exactly 30 minutes
            if ($timeDifference === 30) {
                Mail::to('nur.ambalait@gmail.com')->send(new ItemAdded($item));
                $this->info("Notification email sent for item {$item->name} due in 30 minutes.");
            }
        }
    
        if (empty($items->count())) {
            $this->info('No items found to notify.');
        }
    }
}