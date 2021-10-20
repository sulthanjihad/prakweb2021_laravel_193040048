<?php

namespace App\Models;


class Post 
{
    private static $blog_posts =    [
        [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Sulthan jihad",
        "body" => "et iusto omnis ratione consequatur nihil praesentium culpa? Accusamus laudantium eveniet iste porro."
    ],
        [
        "title" => "Judul Post atan",
        "slug" => "judul-post-kedua",
        "author" => "atan otan",
        "body" => "magnam deleniti, nisi doloribus, et iusto omnis ratione consequatur nihil praesentium culpa? Accusamus laudantium eveniet iste porro."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
       
        return $posts->firstWhere('slug', $slug);
    }
}
