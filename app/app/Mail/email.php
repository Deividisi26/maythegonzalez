<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class email extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Invitado Confirmado";

    public $invitado;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($invitado){
        $this->invitado = $invitado;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.confirmacion');
    }
}
