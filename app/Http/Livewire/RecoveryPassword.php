<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;

class RecoveryPassword extends Component
{
    public string $email = "";

    public function recover()
    {
        $this->validate([
            'email' => "bail|required|email|max:100",
        ], [
            "required" => ":attribute est requis(e).",
            "email" => ":attribute est invalide.",
            "max" => ":attribute ne doit pas dépasser :max caractères.",
        ], [
            "email" => "L'adresse e-mail",
        ]);

        $status = Password::sendResetLink(["email" => $this->email]);
        if ($status == Password::RESET_LINK_SENT) {
            $this->email = "";
            return back()->with('status', __($status));
        }

        throw ValidationException::withMessages([
            'email' => [trans($status)],
        ]);
    }

    public function render()
    {
        return view('livewire.recovery-password');
    }
}
