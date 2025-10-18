<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'Judul-Artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Irnanda nanda',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto ipsum, corporis harum esse sapiente velit
            et atque natus magnam aspernatur, quo dolor? Veniam totam repellat modi minus rem voluptatibus nostrum.'
            ],
            [
                'id' => 2,
                'slug' => 'Judul-Artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Roma Arden',
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut enim consectetur sit neque ea, excepturi sapiente. Excepturi, velit laborum, et facere iure hic corporis fugiat voluptas, deserunt corrupti neque magni.'
            ]
        ];
    }

    public static function find($slug)
    {
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        return Arr::first(static::all(), fn($post) => $post['slug'] == $slug) ?? abort(404);
    }
}
