<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class VerifyStaff extends Mailable
{
    use Queueable, SerializesModels;
    public $token;
    public $user;
    public $tokenid;
    public $password;
    public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($tokendata, $userdata, $tokenid, $password, $email)
    {
        $this->token = $tokendata;
        $this->user = $userdata;
        $this->tokenid = $tokenid;
        $this->password = $password;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.verifystaff');
    }
}
