<?php

namespace Esign\TestMail\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class TestMail extends Mailable
{
    use Queueable;

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Test mail from ' . config('app.name'),
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'test-mail::mail.test-mail',
        );
    }
}
