<?php

namespace App\Http\Controllers\Auth;

use ErrorException;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function renderWelcome()
    {
        return view('pages.welcome');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            $userFromDb = User::where('email', $user->email)->first();

            if ($userFromDb) {
                $userFromDb->name = $user->name;
                $userFromDb->avatar = $user->avatar;
                $userFromDb->save();

                Auth::login($userFromDb);
                return redirect(route('home'));
            } else {
                // Do some 403 stuff here.
                return redirect(route('welcome'));
            }
        } catch (ErrorException $e) {
            return redirect(route('welcome'));
        }
    }
}
