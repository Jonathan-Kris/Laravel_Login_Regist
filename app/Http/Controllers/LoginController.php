<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Symfony\Component\Console\Input\Input;

class LoginController extends Controller
{
    public function index(){
        return view("login");
    }

    public function login()
    {
        $this-> validate(request(),[
            'email'=>['required','email'],
            'password'=>['required','min:8','regex:/^(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]+)$/']
        ]);
        return redirect()->to('/home');
    }
}
