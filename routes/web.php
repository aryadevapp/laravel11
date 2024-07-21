<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
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