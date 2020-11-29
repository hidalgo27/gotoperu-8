<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DesignMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "GotoPeru";
    public $design;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($design)
    {
        //
        $this->design = $design;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.design');
    }
}
