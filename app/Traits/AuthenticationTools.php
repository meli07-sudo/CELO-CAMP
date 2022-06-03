<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Jobs\SendResetPasswordLink;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\returnSelf;

trait AuthenticationTools
{

    public function getPersonalToken()
    {
        return $this->token;
    }
    public function setPersonalToken($value)
    {
        $this->update(["token" => $value]);
    }
    public function checkToken($hash)
    {
        return Hash::check($this->getPersonalToken(), $hash);
    }
    public function emailNotVerifiedAlert()
    {
        if (!$this->hasVerifiedEmail()) {
            alert("Votre adresse e-mail n'a pas encore vérifiée. Veuillez procéder à la vérification en cliquant sur le boutton contenu dans l'e-mail reçu à votre indcription ou faites une nouvelle demande de vérification dans vos paramètres de compte");
        }
    }
    public function addToPasswordReset()
    {
        $token = Str::random(70);
        DB::table("password_resets")->updateOrInsert([
            "email" => $this->email,
        ],[
            "token" => $token,
            "created_at" => now(),
        ]);
        SendResetPasswordLink::dispatch($this, encrypt(bcrypt($token)));
    }
    public function getPasswordResetToken(){
        $passwordResetEntry=DB::table('password_resets')->where("email",$this->email)->first();
        if($passwordResetEntry)
            return $passwordResetEntry->token;
        else
            return false;
    }
    public function removeFromPasswordReset(){
        DB::table('password_resets')->where("email",$this->email)->delete();
    }
}
