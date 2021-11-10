<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PDO;

class RegisterController extends Controller
{
    public function index(){
        return view("register");
    }

    public function val_and_store(){
        $validatedData =  $this->validate(request(),[
            'name'=>['required','min:3','max:22'],
            'age'=>['required','numeric', 'min:17'],
            'email'=>['required','email:dns','unique:users'],
            'password'=>['required','regex:/^(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]+)$/','min:8']
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        request()->session()->flash('success', 'Registration successfull!');

        return redirect()->to('/home');
    }
}
