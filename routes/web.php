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
    return view('home', [
        // key ini akan diakses sebagai nama variable di halaman view nya
        'title_page' => 'Home',
        'number' => 3
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title_page' => 'About',
        'name' => 'Haruka Nishizawa',
        'email' => 'haruka@gmail.com',
        'job' => 'Programmer'
    ]);
});

Route::get('/blog', function () {
    // set a local var array just to try echoing data in child views
    $blog_posts = [
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
    return view('posts', [
        'title_page' => 'Posts',
        'posts' => $blog_posts
    ]);
});

Route::get('/agreement', function () {

    $description1 = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi deserunt qui numquam repellendus! Necessitatibus enim neque labore! Dicta excepturi vero ipsum in facere porro fugiat incidunt nesciunt, mollitia doloribus unde temporibus, dolor ipsa eos labore, quia iste saepe a reprehenderit adipisci et quod hic ea? Minima reprehenderit quod ab quam sunt unde aspernatur ex nobis, voluptatum eius obcaecati odio recusandae harum! Iusto culpa, repudiandae, ducimus reprehenderit reiciendis veniam praesentium tempore ab, illo officiis sit dolore qui ullam. Velit eligendi blanditiis qui suscipit minima id aut. Possimus doloremque, doloribus ex cupiditate natus officiis, aliquid voluptatem rem odit similique perferendis voluptates? Odit!';
    $description2 = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint recusandae sed tempore pariatur iste numquam animi distinctio unde minima rerum, commodi et sit voluptates incidunt enim repellendus voluptatibus eum corporis quia odio repellat aut, voluptate inventore earum. Sit rem sunt velit eum commodi suscipit non repellendus neque? Quos illo similique laudantium omnis officia, dignissimos iure earum necessitatibus assumenda dolore harum nam esse dolorum iusto fugit voluptatum quibusdam minima sit libero accusantium velit qui. Ab aut quod tempore officia earum libero repellat a, assumenda provident quia sunt architecto praesentium, atque doloremque quam nulla necessitatibus distinctio odit, doloribus excepturi explicabo vero harum illo? Debitis dolorum ducimus expedita eligendi commodi numquam quis possimus illum iusto? Quia praesentium aperiam voluptates eius consequatur enim reprehenderit sunt corporis, veniam beatae possimus quo distinctio maxime molestias neque, perspiciatis nostrum. Iure minus ad, aliquam ex tempore perferendis quae magnam sit debitis dignissimos. Numquam quisquam in necessitatibus neque mollitia.';
    return view('agreement', [
        'title_page' => 'Agreement',
        'description1' => $description1,
        'description2' => $description2

    ]);
});


// single post page route
Route::get('posts/{slug}', function ($slug) {

    // example data
    $blog_posts = [
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

    $selected_post = [];

    foreach ($blog_posts as $post) {
        if ($post['slug'] == $slug) {
            $selected_post = $post;
        }
    }


    return view('post', [
        'title_page' => 'Single Post',
        'post' => $selected_post
    ]);
});
