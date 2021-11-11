<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->stateless()->user();
            // dd($user);
            $finduser = User::where('google_id', $user->id)->first();
            if($finduser){
                Auth::login($finduser);
                return redirect('/');
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'age' => 0,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password'=> "password",
                    'email_verified_at'=> now()
                ]);
                // dd($newUser);
                Auth::login($newUser);
                return redirect()->back();
            }

        } catch (Exception $e) {
            dd($e);
            return redirect('/login');
        }

    }
}
