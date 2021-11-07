<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class SignIn extends Component
{


    public string $email = "";

    public string $password = "";


    public function signIn()
    {
        $this->validate([
            'email' => "bail|required|email|max:100|unique:users,email",
            'password' => "bail|required|min:6",
        ], [
            "required" => ":attribute est requis(e).",
            "email" => ":attribute est invalide.",
            "max" => ":attribute ne doit pas dépasser :max caractères.",
            "min" => ":attribute doit excéder :min caractères.",
        ], [
            "email" => "L'adresse e-mail",
            "password" => "Le mot de passe",
        ]);

        Auth::attempt([
            "email" => $this->email,
            "password" => $this->password,
        ]);

        redirect()->intended(RouteServiceProvider::HOME);
    }
    public function render()
    {
        return view('livewire.sign-in');
    }
}
