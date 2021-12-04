<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class RegisteredUserController extends Controller
{

    public static function store(array $userInfo)
    {
        $user = User::create([
            "nom" => $userInfo['nom'],
            "prenom" => $userInfo['prenom'],
            "email" => $userInfo['email'],
            "tel" => $userInfo['tel'],
            "password" => bcrypt($userInfo['password']),
        ]);

        $user->attachRole($userInfo["role"]);
        event(new Registered($user));


        Auth::login($user);
        try {
            (new EmailVerificationNotificationController)->store();
        } catch (\Throwable $th) {
            throw $th;
            Log::error($th);
        }

        return redirect(RouteServiceProvider::HOME);
    }

    public static function socialRegistration($userInfo){
        $user = User::create([
            "nom" => $userInfo['nom'],
            "email" => $userInfo['email'],
            "email_verified_at" => now(),
        ]);
        return $user;
    }
}
