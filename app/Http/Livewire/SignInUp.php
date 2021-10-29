<?php

namespace App\Http\Livewire;

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SignInUp extends Component
{

    public string $nom = "";
    public string $prenom = "";
    public string $email = "";
    public string $tel = "";
    public string $password = "";
    public string $password_confirmation = "";


    public function signIn()
    {
        $this->validate([
            'email' => "required|email|max:50",
            'password' => "required|string|min:6",
        ]);

        Auth::attempt([
            "email"=>$this->email,
            "password"=>$this->password,
        ]);

        redirect()->intended(RouteServiceProvider::HOME);
    }
    public function signUp()
    {
        $this->validate([
            'nom' => "required|max:50",
            'prenom' => "required|max:50",
            'email' => "required|email|max:50",
            'tel' => "required|max:50",
            'password' => "required|max:50|confirmed",
        ]);

        RegisteredUserController::store([
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'email' => $this->email,
            'tel' => $this->tel,
            'password' => $this->password,
        ]);
    }

    public function render()
    {
        return view('livewire.sign-in-up');
    }
}
