<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $fromEmail;

    public function __construct($data, $fromEmail)
    {
        $this->data = $data;
        $this->fromEmail = $fromEmail;
    }

    public function build()
    {
        return $this->view('emails.contact')
                    ->from($this->fromEmail) 
                    ->subject('Moozway')
                    ->with('data', $this->data);
    }
}
