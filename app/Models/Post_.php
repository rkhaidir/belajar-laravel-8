<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
  private static $blog_posts = [
    [
      "title" => "Judul Post Pertama",
      "slug" => "judul-post-pertama",
      "author" => "Rakhmat Khaidir",
      "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime saepe, tempore mollitia, ullam, minima quas eos delectus veritatis dolore nihil facere quod debitis beatae consequuntur! Incidunt, vitae quisquam eligendi itaque hic praesentium. Unde libero sequi optio pariatur excepturi. Dignissimos voluptate dolore alias provident ipsa amet veniam suscipit deleniti necessitatibus pariatur."
    ],
    [
      "title" => "Judul Post Kedua",
      "slug" => "judul-post-kedua",
      "author" => "Rakhmat Khaidir",
      "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime saepe, tempore mollitia, ullam, minima quas eos delectus veritatis dolore nihil facere quod debitis beatae consequuntur! Incidunt, vitae quisquam eligendi itaque hic praesentium."
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
