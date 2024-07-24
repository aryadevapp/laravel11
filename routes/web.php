<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog',
        'posts' => Post::all()
    ]);
});

// menampilkan semua artikel
Route::get('/posts/{post:slug}', function (Post $post) {
        // $post = Post::find($id);
        
        return view('post', [
            'title' => 'Single Post',
            'post' => $post
        ]);

});

// menampilan semua artikel, berdasarkan author
Route::get('/authors/{user:username}', function (User $user) {
        return view('posts', [
            'title' => count($user->posts)  .' Article by ' . $user->name,
            'posts' => $user->posts
        ]);
});

// menampilan semua artikel, berdasarkan category
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => ' Article in ' . $category->name,
        'posts' => $category->posts
    ]);
});

Route::get('/about', function () {
    return view('about',[
        'title' => 'About',
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

// ! Manual Database
// Route::get('/posts', function () {
//     return view('posts', [
//         'title' => 'Blog',
//         'posts' => [
//             [
//                 'id' => 1,
//                 'slug' => 'how-writing-heals-the-soul',
//                 'title' => 'How Writing Heals the Soul',
//                 'author' => 'Galang Arya Tama',
//                 'body' => 'Writing about a stressful or traumatic event for just fifteen minutes a day offers remarkable health benefits.'
//             ],
//             [
//                 'id' => 2,
//                 'slug' => 'an-addiction-medicine-pioneer',
//                 'title' => 'An Addiction Medicine Pioneer',
//                 'author' => 'Arya Tama',
//                 'body' => 'When I was in medical school, neither addiction psychiatry nor addiction medicine existed. Dr. David Smith and a small group of pioneers changed all that.'
//             ]
//         ]
//     ]);
// });

// Route::get('/posts/{slug}', function ($slug) {
//     $posts = [
//             [
//                 'id' => 1,
//                 'slug' => 'how-writing-heals-the-soul',
//                 'title' => 'How Writing Heals the Soul',
//                 'author' => 'Galang Arya Tama',
//                 'body' => 'Writing about a stressful or traumatic event for just fifteen minutes a day offers remarkable health benefits.'
//             ],
//             [
//                 'id' => 2,
//                 'slug' => 'an-addiction-medicine-pioneer',
//                 'title' => 'An Addiction Medicine Pioneer',
//                 'author' => 'Arya Tama',
//                 'body' => 'When I was in medical school, neither addiction psychiatry nor addiction medicine existed. Dr. David Smith and a small group of pioneers changed all that.'
//             ]
//         ];

//         $post = Arr::first($posts, function($post) use ($slug) {
//             return $post['slug'] == $slug;
//         });
        
//         return view('post', [
//             'title' => 'Single Post',
//             'post' => $post
//         ]);

// });