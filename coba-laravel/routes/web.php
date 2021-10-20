<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Sulthan jihad abiyyu",
        "email" => "Sulthanjihad44@gmail.com",
        "image" => "1.jpg"
    ]);
});


Route::get('/blog', function () {$blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Sulthan jihad",
        "body" => "et iusto omnis ratione consequatur nihil praesentium culpa? Accusamus laudantium eveniet iste porro."
    ],
    [
        "title" => "Judul Post kedua",
        "slug" => "judul-post-kedua",
        "author" => "atan",
        "body" => "magnam deleniti, nisi doloribus, et iusto omnis ratione consequatur nihil praesentium culpa? Accusamus laudantium eveniet iste porro."
    ],
    
];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single post
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sulthan jihad",
            "body" => "et iusto omnis ratione consequatur nihil praesentium culpa? Accusamus laudantium eveniet iste porro."
        ],
        [
            "title" => "Judul Post kedua",
            "slug" => "judul-post-kedua",
            "author" => "atan",
            "body" => "magnam deleniti, nisi doloribus, et iusto omnis ratione consequatur nihil praesentium culpa? Accusamus laudantium eveniet iste porro."
        ],
        
    ];
    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }
    
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});