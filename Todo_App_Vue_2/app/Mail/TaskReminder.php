<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TaskReminder extends Mailable
{
    use Queueable, SerializesModels;

    public $tasks;

    public function __construct($tasks)
    {
        $this->tasks = $tasks;
    }

    public function build()
    {
        return $this->view('emails.taskReminder')
                    ->with(['tasks' => $this->tasks])
                    ->subject('Your Incomplete Tasks Reminder');
    }
}
