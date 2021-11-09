<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Models\Role;
use Illuminate\Database\Eloquent\Collection;

class SignUp extends Component
{
    public string $nom = "";
    public string $prenom = "";
    public string $email = "";
    public string $tel = "";
    public string $role = "";
    public $roles = "";
    public string $password = "";
    public string $password_confirmation = "";

    public function signUp()
    {
        $this->validate([
            'email' => "bail|required|email|max:100|unique:users,email",
            'password' => "bail|required|min:6|confirmed",
            'nom' => "bail|required|max:50|min:1",
            'prenom' => "bail|required|max:50|min:1",
            'tel' => "bail|nullable|max:50|min:8",
            "role"=>"required"
        ], [
            "required" => ":attribute est requis(e).",
            "email" => ":attribute est invalide.",
            "max" => ":attribute ne doit pas dépasser :max caractères.",
            "min" => ":attribute doit contenir au moins :min caractères.",
            "confirmed" => "Les mots de passe ne correspondent pas.",
        ], [
            "email" => "L'adresse e-mail",
            "password" => "Le mot de passe",
            "nom" => "Le nom",
            "prenom" => "Le prénom",
            "tel" => "Le numéro de téléphone",
            "role"=>"Le role"
        ]);

        RegisteredUserController::store([
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'email' => $this->email,
            'tel' => $this->tel,
            'password' => $this->password,
            'role' => $this->role,
        ]);
    }

    public function mount(){
        $this->roles=Role::where("id",">","1")->get();
    }

    public function render()
    {
        return view('livewire.sign-up');
    }
}
