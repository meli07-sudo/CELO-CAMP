<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasswordResetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "email"=>"bail|required|email|exists:password_resets,email",
            "password"=>"bail|required|confirmed",
            "reset-token"=>"bail|required|",
            "remember"=>"nullable"
        ];
    }
    public function messages()
    {
     return [
        "email" => "Veuillez entrer une adresse valide.",
        "email.required" => ":attribute est requise.",
        "password.required" => "Le mot de passe est requis.",
        "reset-token.required" => "Votre lien de réinitialisation est invalide ou expiré.",
        "exists" => "Cette adresse n'a pas de demande de réinitialisation en cours.",
        "confirmed" => "Les mots de passe ne correspondent pas.",
     ];   
    }
}
