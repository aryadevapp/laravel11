<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        'title' => 'Blog'
    ]);
});

Route::get('/about', function () {
    return view('about',[
        'title' => 'about',
        'name' => 'Galang Arya Tama'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact'
    ]);
});


// Untuk Mengirim data
// Route::get('/about', function () {
//     return view('about',[
//         'name' => 'Galang Arya Tama'
//     ]);
// });

// Hanya Menampilkan Teks
// Route::get('/', function () {
//     return 'Hello, World!';
// });