<?php

namespace App\Http\Livewire\Auth;

use App\Http\Controllers\UserController;
use Livewire\Component;

class Register extends Component
{

    public string $nom = "";
    public string $prenom = "";
    public string $email = "";
    public string $password = "";
    public string $password_confirmation = "";
    public bool $remember = true;

    protected array $rules = [
        "nom" => "bail|required|string|max:100",
        "prenom" => "bail|required|string|max:250",
        "email" => "bail|required|email|max:100|unique:users,email",
        "password" => "bail|required|confirmed",
        "remember" => "bail|required",
    ];
    protected $messages = [
        "email" => "Veuillez entrer une adresse valide.",
        "email.required" => ":attribute est requise.",
        "prenom.required" => ":attribute sont requis.",
        "remember.required" => ":attribute est requise.",
        "required" => ":attribute est requis.",
        "max" => ":attribute ne peut excéder :value. caractères.",
        "email.unique" => "Cette adresse existe déja.",
        "confirmed" => "Les mots de passe ne correspondent pas.",
    ];

    protected $attributes = [
        "nom" => "Le nom",
        "prenom" => "Le(s) prénom(s)",
        "email" => "L'adresse e-mail",
        "password" => "Le mot de passe",
        "remember" => "L'option de persistence",
    ];


    public function handleSubmit()
    {
        $this->validate($this->rules,$this->messages,$this->attributes);
        UserController::register([
            "nom"=>$this->nom,
            "prenom"=>$this->prenom,
            "email"=>$this->email,
            "password"=>$this->password,
            "remember"=>$this->remember,
        ]);
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
