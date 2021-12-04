<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\DB;

class ResetPassword extends Component
{
    public string $email = '';
    public string $token = '';
    public string $password = "";
    public string $password_confirmation = "";

    public function mount()
    {
        $this->email = request("email");
        $this->token = request("token");
        $password_reset_entry = DB::table("password_resets")->where("email", $this->email)->first();
        if ($password_reset_entry == null || !Hash::check($this->token, $password_reset_entry->token))
            session()->flash('invalidToken', "Votre jeton de réinitialisation de mot de passe est invalide");
    }

    public function resetPasswd()
    {

        $this->validate([
            'email' => "bail|required|email|max:100",
            'password' => "bail|required|min:6|confirmed",
            'token' => "required"
        ], [
            "required" => ":attribute est requis(e).",
            "email" => ":attribute est invalide.",
            "max" => ":attribute ne doit pas dépasser :max caractères.",
            "min" => ":attribute doit contenir au moins :min caractères.",
            "confirmed" => "Les mots de passe ne correspondent pas.",
        ], [
            "email" => "L'adresse e-mail",
            "password" => "Le mot de passe",
        ]);
        $password_reset_entry = DB::table("password_resets")->where("email", $this->email)->first();
        if ($password_reset_entry != null && Hash::check($this->token, $password_reset_entry->token)) {

            $status = Password::reset(
                [
                    "email" => $this->email,
                    "password" => $this->password,
                    "password_confirmation" => $this->password_confirmation,
                    "token" => $this->token,
                ],
                function ($user) {
                    $user->forceFill([
                        'password' => Hash::make($this->password),
                        'remember_token' => Str::random(60),
                    ])->save();

                    event(new PasswordReset($user));
                }
            );
            return $status == Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withInput(["email" => $this->email])
                ->withErrors(['email' => __($status)]);
        } else
            session()->flash('invalidToken', "Votre jeton de réinitialisation de mot de passe est invalide");
    }

    public function render()
    {
        return view('livewire.reset-password');
    }
}
