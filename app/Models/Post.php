<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    // Untuk Melindungi dari user yang ingin mengirimkan data melalui Request HTTP
    protected   $fillable = ['title', 'author', 'slug', 'body'];

}

