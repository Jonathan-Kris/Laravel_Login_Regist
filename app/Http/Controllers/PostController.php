<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Posts $posts){
        return view("posts", [
            "title" => "Single Post",
            "post" => $posts
        ]);
    }
}
