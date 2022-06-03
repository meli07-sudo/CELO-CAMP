<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetRestPasswordLinkRequest;
use App\Http\Requests\PasswordResetRequest;
use App\Jobs\SendResetPasswordLink;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{

    public function login(array $credentials)
    {

        $user = User::firstWhere('email', $credentials['email']);
        if (!Auth::attempt(["email" => $user->email, "password" => $credentials['password']], $credentials['remember']))
            return false;
        $user->emailNotVerifiedAlert();
        return redirect(route('dashboard'));
    }
    public function register(array $credentials)
    {
        $user = User::create([
            "name" => $credentials['prenom'] . ' ' . $credentials['nom'],
            "email" => $credentials['email'],
            "password" => bcrypt($credentials['password'])
        ]);
        Auth::login($user, $credentials['remember']);
        $user->emailNotVerifiedAlert();
        return redirect(RouteServiceProvider::HOME);
    }
    public function verifyEmail($token, $email)
    {
        try {
            $decryptedEmail = decrypt($email);
            $decryptedToken = decrypt($token);
        } catch (\Throwable $th) {
            abort(403, "Adresse e-mail ou token invalide");
        }
        $user = User::firstWhere('email', $decryptedEmail);
        if ($user && $user->checkToken($decryptedToken)) {
            $user->markEmailAsVerified();
            $user->setPersonalToken(null);
            return view("auth.verify-email");
        } else
            abort(404);
    }
    public function getPassowordResetLink(GetRestPasswordLinkRequest $request)
    {
        $user = User::firstWhere('email', $request->email);
        if ($user) {
            $user->addToPasswordReset();
            return redirect()->back()->with("link-sent",true);
        } else
            abort(404, "Utilisateur introuvale");
    }
    public function getPasswordReset($token, $email)
    {
        try {
            $decryptedEmail = decrypt($email);
            $decryptedToken = decrypt($token);
        } catch (\Throwable $th) {
            abort(403, "Adresse e-mail ou token invalide");
        }
        return view("auth.password-reset", [
            "email" => $decryptedEmail,
            "token" => $decryptedToken
        ]);
    }
    public function passwordReset(PasswordResetRequest $request)
    {
        $user = User::firstWhere('email', $request->email);
        if (!$user)
            abort(404, "Utilisateur inconnu");

        if (!Hash::check($user->getPasswordResetToken(), $request->input("reset-token")))
            throw ValidationException::withMessages([
                "reset-token" => "Votre lien de réinitialisation est invalide."
            ]);
        
        $user->removeFromPasswordReset();
        $user->update([
            "password" => bcrypt($request->password)
        ]);
        Auth::login($user, $request->boolean('remember'));
        return redirect(RouteServiceProvider::HOME);
    }
    public function logout()
    {
        auth()->logout();
        auth()->user()->setRememberToken(null);
        session()->invalidate();
        session()->regenerate();
        session()->regenerateToken();
        return redirect(RouteServiceProvider::PUBLIC_HOME);
    }
}
