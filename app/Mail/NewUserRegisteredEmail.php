<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewUserRegisteredEmail extends Mailable
{
    use Queueable, SerializesModels;
    public string $hashedToken = '';
    public User $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, string $hashedToken)
    {
        $this->user = $user;
        $this->hashedToken = $hashedToken;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Inscription K4A Blockchain")->markdown('mails.auth.new-user-registered', [
            "link" => route("verify.email", ["email" => encrypt($this->user->email), "token" => $this->hashedToken])
        ]);
    }
}
