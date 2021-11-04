<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;

class RegisterController extends Controller
{
    public function index(){
        return view("register");
    }
    public function val(){
        $this-> validate(request(),[
            'name'=>['required','min:3','max:22'],
            'age'=>['required','numeric','min:17'],
            'password'=>['required','regex:/^(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]+)$/']
        ]);
        return redirect()->to('/home');
    }
}
