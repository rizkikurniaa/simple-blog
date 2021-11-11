<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rizki Kurniawan",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius laudantium et ut vel vero maxime unde soluta officiis minus deleniti! Laboriosam itaque id nihil in aperiam temporibus quis explicabo, eligendi aut cupiditate doloremque vel saepe neque officia vitae dolorum, sed veritatis, fugiat minima recusandae? Et iste cupiditate optio cum, consectetur impedit dolores dolor alias quaerat molestias, officia id ducimus ipsa modi repellat dignissimos sed tempora? Perspiciatis, earum praesentium officia in est quaerat temporibus asperiores sed. Tempora officiis expedita ipsam odio."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sulistya Ningrum",
            "body" => "
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae odio quas distinctio, architecto sint ipsum nobis facere molestiae. Porro animi dolor, hic harum ullam maxime perspiciatis atque quibusdam nemo odio accusantium sed asperiores voluptatum exercitationem? Tempora molestias, perferendis architecto quis non voluptas qui deserunt doloribus aperiam at aut, placeat eius debitis reprehenderit iusto dolorum aliquam numquam ut quos inventore, explicabo dolore eos fuga. Obcaecati nesciunt accusantium, est iste numquam laudantium iusto, cum maxime neque dolore fugiat ipsam soluta maiores sed consectetur, labore mollitia eligendi tenetur libero. Veniam ad at assumenda error excepturi perspiciatis laboriosam, eum eos, cum reiciendis ex quas?"
        ],
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
