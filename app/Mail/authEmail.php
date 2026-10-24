<?php
namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class authEmail extends Mailable
{
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '¡Bienvenido a nuestro sitio!',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.bienvenida', // Vista en resources/views/emails/bienvenida.blade.php
        );
    }
}