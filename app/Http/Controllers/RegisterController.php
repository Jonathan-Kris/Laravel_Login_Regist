<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;

class RegisterController extends Controller
{
    public function index(){
        return view("register");
    }
}
