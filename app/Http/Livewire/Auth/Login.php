<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Http\Controllers\UserController;
use Illuminate\Validation\ValidationException;

class Login extends Component
{
    public string $email = "";
    public string $password = "";
    public bool $remember = true;

    protected array $rules = [
        "email" => "bail|required|email|max:100|exists:users,email",
        "password" => "bail|required",
        "remember" => "bail|required",
    ];
    protected $messages = [
        "email" => "Veuillez entrer une adresse valide.",
        "email.required" => ":attribute est requise.",
        "remember.required" => ":attribute est requise.",
        "required" => ":attribute est requis.",
        "max" => ":attribute ne peut excéder :value. caractères.",
        "email.exists" => "Cette adresse e-mail nous est inconnue.",
    ];

    protected $attributes = [
        "email" => "L'adresse e-mail",
        "password" => "Le mot de passe",
        "remember" => "L'option de persistence",
    ];

    public function handleSubmit()
    {
        $this->validate($this->rules, $this->messages, $this->attributes);
        $login = UserController::login([
            "email" => $this->email,
            "password" => $this->password,
            "remember" => $this->remember,
        ]);
        if (!$login)
            $this->addError("password", __('auth.password'));
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
