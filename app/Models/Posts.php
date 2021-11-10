<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'title',
    //     'excerpt',
    //     'body'
    // ];

    // Untuk define yang tidak boleh di mass asign
    protected $guarded = [ 'id' ];
}
