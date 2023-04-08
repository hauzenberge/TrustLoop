<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


use App\Models\User;
use App\Models\Avatar;

class LoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {

        $user = Socialite::driver('google')->user();

        $existingUser = User::where('email', $user->getEmail())->first();

        if ($existingUser) {
            Auth::login($existingUser, true);
        } else {
            $newUser = new User;
            $newUser->name = $user->getName();
            $newUser->email = $user->getEmail();
            $newUser->password = bcrypt('user');

            $newUser->save();

            // Save the user's avatar, if it exists
            if ($user->avatar) {
                $avatar = new Avatar();
                $avatar->user_id = $newUser->id;
                $avatar->path = $user->avatar;
                $avatar->is_uploaded = false;
                $avatar->save();
            }

            Auth::login($newUser, true);
        }

        return redirect()->intended('/dashboard');
    }
}
