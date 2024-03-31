<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BulkEmail extends Mailable
{
    use Queueable, SerializesModels;

    /* Setting the subject and message to be used in the email. */
    public $subject;
    public $message;


    /**
     * Create a new message instance.
     */
    public function __construct(string $subject, string $message)
    {
        $this->subject = $subject;
        $this->message = $message;
    }

    public function build()
    {
        return $this->from('support@ngenit.com', 'Consultant House')->subject($this->subject)
                    ->view('mail.custom', ['mail_body' => $this->message]);
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope():Envelope
    {
        return new Envelope(
            subject: $this->subject,
        );
    }


    /**
     * Get the message content definition.
     */
    public function content()
    {

        // return (new Content)
        //     ->markdown('mail.custom')
        //     ->with('message', $this->message);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
