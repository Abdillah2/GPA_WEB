<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News
{
   private static $news_post = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Agung Pradana",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus dolorem magnam
        dicta repellat voluptas fugiat sed voluptatem enim? Asperiores cupiditate iure beatae
        molestiae eum quos voluptatum ratione neque placeat nulla!"
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Graha Prima",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas adipisci minus, ipsam deserunt
        modi nostrum? Temporibus quod voluptatibus enim commodi, nulla voluptatem a magni dolor aspernatur b
        eatae vel cupiditate adipisci rerum exercitationem modi repellendus
        eos vitae distinctio fugiat ducimus? Labore quae veritatis tempore mollitia quia repudiandae totam,
        quisquam voluptate, laboriosam itaque aliquid deleniti, eius voluptas perspiciatis assumenda ipsam beatae quibusdam?"
    ],
    [
        "title" => "Judul Post Ketiga",
        "slug" => "judul-post-Ketiga",
        "author" => "Graha Prima",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas adipisci minus, ipsam deserunt
        modi nostrum? Temporibus quod voluptatibus enim commodi, nulla voluptatem a magni dolor aspernatur b
        eatae vel cupiditate adipisci rerum exercitationem modi repellendus
        eos vitae distinctio fugiat ducimus? Labore quae veritatis tempore mollitia quia repudiandae totam,
        quisquam voluptate, laboriosam itaque aliquid deleniti, eius voluptas perspiciatis assumenda ipsam beatae quibusdam?"
    ],
];

public static function all()
    {
        return collect(self::$news_post);
    }

public static function find($slug)
    {
        $news = static::all();
        return $news->firstWhere('slug', $slug);

    }

}