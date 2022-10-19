<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Akbar Maldini",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui dolorem id excepturi eligendi distinctio nobis tenetur et tempora eveniet iste ex laboriosam fugiat deserunt porro, non ducimus iure alias quaerat dicta magni natus minus libero. Quam deleniti est harum ipsam quaerat dolores facilis eius modi reiciendis, atque et dignissimos quae aspernatur natus odio, beatae veritatis! Quos velit incidunt quo quasi alias asperiores accusantium sapiente illo, consequatur pariatur quas harum qui voluptatem vel ut dolor, natus, nam culpa. Dignissimos, aliquid animi!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Muhamad Lutfi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, veritatis. Nam enim deserunt consequatur? Dignissimos repudiandae non consequuntur quisquam ullam corporis consectetur aliquid perspiciatis porro adipisci aperiam totam magnam architecto numquam velit illum eius officia fugit, unde quis saepe. Laboriosam cumque veritatis vero, distinctio voluptate accusantium modi ipsa, quidem earum nemo numquam voluptatibus iusto molestias aperiam rem facilis quaerat eius maiores perspiciatis eveniet amet fuga illum? Sit eaque possimus perspiciatis maiores repudiandae consectetur alias ratione temporibus? Corporis beatae reiciendis harum, voluptas unde culpa iure debitis. Reiciendis vitae placeat quisquam deleniti, quia laborum aspernatur voluptas possimus, eveniet eaque laudantium dolore earum."
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
