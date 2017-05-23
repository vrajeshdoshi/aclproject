<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class VerifyUser extends Mailable
{
    use Queueable, SerializesModels;
    public $token;
    public $user;
    public $tokenid;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($tokendata, $userdata, $tokenid)
    {   
      //  dd($userdata);

        $this->token = $tokendata;
        $this->user = $userdata;
        $this->tokenid = $tokenid;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
       // $this->view('emails.orders.shipped');
        
        return $this->view('email.verifyemail');
    }
}
