<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    // untuk membuat data dummy
    Use HasFactory;

    // Untuk Melindungi dari user yang ingin mengirimkan data melalui Request HTTP
    protected   $fillable = ['title', 'author', 'slug', 'body'];

    // untuk relationship database one to one
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
