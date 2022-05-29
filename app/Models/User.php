<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

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
}
