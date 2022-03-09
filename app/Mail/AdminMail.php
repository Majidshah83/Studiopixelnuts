<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public $admindata;
    public function __construct($admindata)
    {
         $this->admindata = $admindata;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

         return $this->from($this->admindata['email'])->subject('Notification')->view('layouts.adminemail')->with('admindata',$this->admindata);
    }
}