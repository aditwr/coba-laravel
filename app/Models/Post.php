<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            'title' => 'First Post',
            'slug' => 'first-post',
            'author' => 'Senyamiku',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo voluptatibus, quae cumque sequi nobis ipsa, iste itaque voluptatum molestias asperiores id distinctio fuga unde animi dicta ex placeat autem nostrum enim, vitae tenetur sapiente. Nobis similique modi, aperiam earum maxime, id ipsam quam non deleniti eveniet voluptatem? Quas iusto, cumque adipisci et distinctio, sequi similique sit, in at tenetur provident aliquam. Quaerat soluta delectus iusto necessitatibus placeat repellat fugiat alias animi accusantium, at quia labore quidem ipsam debitis! Nisi sapiente ratione tempora, temporibus magni provident cumque eius facilis cupiditate, delectus mollitia, eligendi aut et. Vel repudiandae consequuntur eligendi totam itaque.'
        ],
        [
            'title' => 'Second Post',
            'slug' => 'second-post',
            'author' => 'Xie Chu Ling',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates hic quod inventore, voluptatem vel autem sapiente cupiditate, incidunt similique corporis id possimus. Illo ducimus adipisci laudantium architecto odio inventore amet sequi asperiores nesciunt, repellendus sed vero debitis natus nulla quaerat excepturi consequatur quam est sapiente repellat. Itaque laboriosam ratione quod?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo corrupti aut est, corporis incidunt dolorum dolore eligendi pariatur a eos mollitia, iusto ipsa enim animi neque. Id qui iste veniam harum ex hic facere quod illum provident? Incidunt fuga ipsum omnis, adipisci alias saepe debitis. Harum impedit eveniet ea rerum, sint aperiam sequi omnis saepe? Cumque aliquid quo magnam, quibusdam eaque soluta neque perferendis dolore repudiandae? Illo asperiores cumque saepe?'
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $selected_post = [];
        $posts = static::all();
        // firstWhere() default operator is '=='
        return $posts->firstWhere('slug', '==', $slug);
    }
}
