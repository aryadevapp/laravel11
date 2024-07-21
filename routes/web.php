<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about',[
        'name' => 'Galang Arya Tama'
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