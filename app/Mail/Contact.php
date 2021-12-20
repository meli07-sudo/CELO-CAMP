<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;
    public string $nom = "";
    public string $email = "";
    public string $subjectForm = "";
    public string $message = "";

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $nom, string $email, string $subject, string $message)
    {
        $this->nom = $nom;
        $this->email = $email;
        $this->subjectForm = $subject;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Nouvelle Entrée Formulaire de Contact")->replyTo($this->email)->markdown("mails.contact");
    }
}
