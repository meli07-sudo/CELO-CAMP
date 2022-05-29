<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public static function login(array $credentials)
    {
        $user = User::firstWhere('email', $credentials['email']);
        if (!Auth::attempt(["email" => $user->email, "password" => $credentials['password']], $credentials['remember']))
            return false;
        $user->emailNotVerifiedAlert();
        return redirect(route('dashboard'));
    }
    public static function register(array $credentials)
    {
        $user = User::create([
            "name" => $credentials['prenom'] . ' ' . $credentials['nom'],
            "email" => $credentials['email'],
            "password" => bcrypt($credentials['password'])
        ]);
        Auth::login($user, $credentials['remember']);
        $user->emailNotVerifiedAlert();
        return redirect(route('dashboard'));
    }
    public function verifyEmail()
    {
        if (request(('email')) && request('token')) {
            $user = User::firstWhere('email', decrypt(request('email')));
            if ($user && $user->checkToken(request('token'))) {
                $user->markEmailAsVerified();
                $user->setPersonalToken(null);
                return view("auth.verify-email");
            } else
                abort(404);
        } else
            abort(404);
    }
}
