<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    $posts = [
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
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'slug' => 'Judul-Artikel-1',
            'author' => 'Irnanda nanda',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto ipsum, corporis harum esse sapiente velit
            et atque natus magnam aspernatur, quo dolor? Veniam totam repellat modi minus rem voluptatibus nostrum.'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'slug' => 'Judul-Artikel-2',
            'author' => 'Roma Arden',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut enim consectetur sit neque ea, excepturi sapiente. Excepturi, velit laborum, et facere iure hic corporis fugiat voluptas, deserunt corrupti neque magni.'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    if (!$post) abort(404);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});
