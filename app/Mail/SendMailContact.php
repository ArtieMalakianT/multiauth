<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Admin;

class SendMailContact extends Mailable
{
    use Queueable, SerializesModels;

    public $userEmail;
    public $userName;
    public $tel;
    public $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userEmail,$userName,$tel,$msg)
    {
        $this->userEmail = $userEmail;
        $this->userName = $userName;
        $this->tel = $tel;
        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->userEmail)->view('mail.contact')->with([
        'userName' => $this->userName,
        'tel' => $this->tel,
        'msg' => $this->msg,]);
    }
}
