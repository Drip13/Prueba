<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotificacionEmpresa extends Mailable
{
    use Queueable, SerializesModels;

    public $empresa;
    public $subject = 'Notificación de creación de empresa';

    /**
     * Create a new message instance.
     *
     *
     * @return void
     */
    public function __construct($empresa)
    {
        $this->empresa = $empresa;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.notificacion');
    }
}
