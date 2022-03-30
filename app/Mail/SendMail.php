<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $formdata;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($formdata)
    {

        $this->formdata = $formdata;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM'))->subject('Logo Design Request Received')->view('layouts.mailTemplate')->with('formdata', $this->formdata);

    }
}

?>
