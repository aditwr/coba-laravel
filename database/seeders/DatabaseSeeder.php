<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Post::factory(20)->create();
        Category::factory(3)->create();

        // User::create([
        //     'name' => 'Senyamiku',
        //     'email' => 'senyamiku@gmail.com',
        //     'password' => bcrypt('senyamiku')
        // ]);

        // Category::create([
        //     'name' => 'Web Programming',
        //     'slug' => 'web-programming'
        // ]);

        // Post::create([
        //     'title' => 'PHP Programming Language',
        //     'user_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'php-programming-language',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit accusamus, inventore modi',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit accusamus, inventore modi eum nobis ex quidem ducimus voluptas neque excepturi, hic distinctio qui quaerat, recusandae est porro illum dicta aperiam culpa itaque laudantium in aliquid omnis assumenda! Autem, molestias porro eius sit ullam, maiores quis sed quidem voluptatibus, ducimus totam. Voluptas quas, deserunt quibusdam laboriosam earum pariatur repudiandae vitae eaque fugit beatae consequuntur dolorum magnam facere ullam quis? Tempore quos maxime excepturi placeat ab ullam, enim atque. Voluptas quo expedita libero sapiente! Assumenda vel quisquam eaque provident. Aliquam a, dolorum quia nostrum aliquid eligendi omnis ipsa provident impedit sapiente, repellat perspiciatis quasi nobis excepturi laudantium dolorem harum consequatur, culpa voluptates? Tempora odit laborum voluptatem fuga distinctio quisquam. Dolore, suscipit pariatur.'
        // ]);
    }
}
