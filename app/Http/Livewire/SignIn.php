<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;

class SignIn extends Component
{


    public string $email = "";
    public string $password = "";


    public function signIn()
    {
        $this->validate([
            'email' => "bail|required|email|max:100|exists:users,email",
            'password' => "bail|required|min:6",
        ], [
            "email.required" => "L'adresse e-mail est requise.",
            "required" => ":attribute est requis.",
            "email" => ":attribute est invalide.",
            "max" => ":attribute ne doit pas dépasser :max caractères.",
            "min" => ":attribute doit excéder :min caractères.",
            "exists" => "Cette adresse e-mail n'a pas été identifiée.",
        ], [
            "email" => "L'adresse e-mail",
            "password" => "Le mot de passe",
        ]);
        $auth=Auth::attempt([
            "email" => $this->email,
            "password" => $this->password,
        ]);
        if($auth)
            redirect()->intended(RouteServiceProvider::HOME);
        else{
            session()->flash("errors.auth","Mot de passe incorrect");
        }
    }
    public function render()
    {
        return view('livewire.sign-in');
    }
}
