<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Validator;
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
        sleep(2);
        $this->validate([
            'email' => "required|email|max:50",
            'password' => "required|string|min:6",
        ]);
    }
    public function signUp()
    {
        sleep(2);
        $this->validate([
            'nom' => "required|email|max:50",
            'prenom' => "required|email|max:50",
            'email' => "required|email|max:50",
            'tel' => "required|email|max:50",
            'password' => "required|email|max:50|confirm",
        ]);
    }

    public function render()
    {
        return view('livewire.sign-in-up');
    }
}
