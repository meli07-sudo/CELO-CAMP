<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Providers\RouteServiceProvider;

class VerifyEmail extends Component
{
    public function sendVerificationEmail()
    {
        if (auth()->user()->hasVerifiedEmail()) {
            return redirect()->intended(RouteServiceProvider::HOME);
        }

        auth()->user()->sendEmailVerificationNotification();
        return session()->flash("linkSent","Un lien de vérification a été envoyé à votre adresse e-mail.");
    }
    public function render()
    {
        return view('livewire.verify-email');
    }
}
