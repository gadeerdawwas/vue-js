<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'slug' => Str::slug(fake()->name()),
            'body' => fake()->paragraph(10),
            'user_id' => fake()->numberBetween(1 ,10) ,
            'category_id' =>  fake()->numberBetween(1 ,10),
        ];
    }
}
