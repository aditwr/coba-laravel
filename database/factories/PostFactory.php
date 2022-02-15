<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(3, 8)),
            'user_id' => mt_rand(1, 5),
            'category_id' => mt_rand(1, 3),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            # use map in Class Collection to make an paragraph
            'body' => collect($this->faker->paragraphs(mt_rand(6, 10)))
                ->map(function ($item) { #1 $item is string include few of sentences
                    return "<p>$item</p>";
                })->implode(''),
        ];
    }
}
