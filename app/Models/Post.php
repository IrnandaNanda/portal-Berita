<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // untuk membuat data dummy
    Use HasFactory;

    // Untuk Melindungi dari user yang ingin mengirimkan data melalui Request HTTP
    protected   $fillable = ['title', 'author', 'slug', 'body'];
}
