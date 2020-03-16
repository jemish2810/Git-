<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {

       print_r( $this->data = $data);
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->from('jemish@logisticinfotech.co.in')->subject('New Mail testing Demo ')->view('dynamic_email_template')->with('data', $this->data);
        return $this->from('jemish@logisticinfotech.co.in')->subject('Delete Record')->view('Dynamic_mail_content')->with('data', $this->data);
    }
}


