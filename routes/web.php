<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    $posts = [
        [
            'title' => 'Judul Artikel 1',
            'author' => 'Irnanda nanda',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto ipsum, corporis harum esse sapiente velit
            et atque natus magnam aspernatur, quo dolor? Veniam totam repellat modi minus rem voluptatibus nostrum.'
        ],
        [
            'title' => 'Judul Artikel 2',
            'author' => 'Roma Arden',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut enim consectetur sit neque ea, excepturi sapiente. Excepturi, velit laborum, et facere iure hic corporis fugiat voluptas, deserunt corrupti neque magni.'
        ]
    ];
    return view('posts', ['title' => 'Blog Page', 'posts' => $posts]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Me']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});
