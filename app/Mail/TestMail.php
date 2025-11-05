<?php

// namespace App\Mail;

// use Illuminate\Bus\Queueable;
// use Illuminate\Contracts\Queue\ShouldQueue;
// use Illuminate\Mail\Mailable;
// use Illuminate\Mail\Mailables\Content;
// use Illuminate\Mail\Mailables\Envelope;
// use Illuminate\Queue\SerializesModels;


// class TestMail extends Mailable
// {
//     use Queueable, SerializesModels;
//     public $data;
//     /**
//      * Create a new message instance.
//      */
//     public function __construct($data)
//     {
//         $this->data = $data;
//     }

//     /**
//      * Get the message envelope.
//      */
//     public function envelope(): Envelope
//     {
//         return new Envelope(
//             subject: 'Test Mail',
//             from: 'finger@joe.lafamiglia.my.id',
//             to: $this->data['email'] // Uses 'email' key from the array
//         );
//     }

//     /**
//      * Get the message content definition.
//      */
//     public function content(): Content
//     {
//         // THIS IS THE FIX:
//         // Make sure you are passing $this->data["name"] (a string)
//         // and not $this->data (an array).
//         return new Content(
//             view: 'registration-email-blade',
//             with: ['data' => $this->data["name"]] // Uses 'name' key from the array
//         );
//     }

//     /**
//      * Get the attachments for the message.
//      *
//      * @return array<int, \Illuminate\Mail\Mailables\Attachment>
//      */
//     public function attachments(): array
//     {
//         return [];
//     }
// }



namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class TestMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Welcome! Please Confirm Your Subscription', // <-- Better subject
            from: 'finger@joe.lafamiglia.my.id',
            to: $this->data['email']
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        // --- THIS IS THE CHANGE ---
        // We are now passing the FULL array again.
        return new Content(
            view: 'registration-email-blade',
            with: ['data' => $this->data]
        );
    }

    /**
     * Get the attachments for the message.
     */
    public function attachments(): array
    {
        return [];
    }
}
