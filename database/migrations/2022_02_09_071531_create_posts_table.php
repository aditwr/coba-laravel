<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            // table structure
            $table->id();
            // create an foreign key for Model 'Category'
            $table->foreignId('category_id');
            $table->string('title'); //varchar(255)
            $table->string('slug')->unique();
            $table->text('excerpt'); //text
            $table->text('body');
            $table->timestamp('published_at')->nullable(); // timestamp
            // generate created_at & updated_at
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
