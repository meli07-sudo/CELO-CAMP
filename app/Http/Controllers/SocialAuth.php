<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SocialAuth extends Controller
{
    public function googleRedirect()
    {
        return Socialite::driver("google")->redirect();
    }
    public function googleCallback()
    {
        $googleUser = Socialite::driver("google")->user();
        $user = User::firstWhere('email', $googleUser->email);
        if (!$user) {
            $user = RegisteredUserController::socialRegistration([
                'nom' => $googleUser->user['family_name'],
                'email' => $googleUser->email,
            ]);
            $user->prenom = $googleUser->user['given_name'];
            $user->avatar = $googleUser->avatar;
            $user->social_id = Social::firstWhere('social_name', "google")->id;
            $user->token = $googleUser->token;
        }
        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }

    public function facebookRedirect()
    {
        return Socialite::driver("facebook")->redirect();
    }
    public function facebookCallback()
    {

        $facebookUser = Socialite::driver("facebook")->user();
        $user = User::firstWhere('email', $facebookUser->email);
        if (!$user) {
            $user = RegisteredUserController::socialRegistration([
                'nom' => $facebookUser->name ?? $facebookUser->nickname,
                'email' => $facebookUser->email ?? '',
            ]);
            $user->avatar = $facebookUser->avatar;
            $user->social_id = Social::firstWhere('social_name', "facebook")->id;
            $user->token = $facebookUser->token;
        }
        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }
    public function githubRedirect()
    {
        return Socialite::driver("github")->redirect();
    }
    public function githubCallback()
    {
        $githubUser = Socialite::driver("github")->user();
        $user = User::firstWhere('email', $githubUser->email);
        if (!$user) {
            $user = RegisteredUserController::socialRegistration([
                'nom' => $githubUser->name ?? $githubUser->nickname,
                'email' => $githubUser->email,
            ]);
            $user->avatar = $githubUser->avatar;
            $user->social_id = Social::firstWhere('social_name', "github")->id;
            $user->token = $githubUser->token;
        }
        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }
}
