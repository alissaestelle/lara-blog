<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\Tag;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/*
@extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
*/

class PostFactory extends Factory
{
    /*
    Define the model's default state.
    @return array<string, mixed>
    */

    public function definition(): array
    {
        $images = (new Image())->render();

        return [
            'authorID' => fake()->randomElement(User::all()),
            'tagID' => fake()->randomElement(Tag::all()),
            'title' => ucfirst(fake()->word()),
            'image' => fake()->randomElement($images),
            'url' => fake()->unique()->slug(),
            'published' => fake()->date(),
            'excerpt' => fake()->sentence(),
            'body' => fake()->paragraphs(3, true),
        ];
    }
}
