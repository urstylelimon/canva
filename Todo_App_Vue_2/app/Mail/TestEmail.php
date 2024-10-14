<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function build()
    {
        return $this->from('nur.ambalait@gmail.com')
                    ->subject('Test Email from Laravel')
                    ->view('emails.test');
    }
}
