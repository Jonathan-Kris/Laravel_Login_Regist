<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Symfony\Component\Console\Input\Input;

class LoginController extends Controller
{
    public function index(){
        return view("login");
    }

    public function login(Request $request)
    {   
        $credentials =$request->validate([
            'email'=>['required','email:dns'],
            'password'=>['required','min:8','regex:/^(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]+)$/']
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/home')->with('success','Login Success');
        }

        return redirect('/login');
    }
}
