<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/*
@extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
*/

class CommentFactory extends Factory
{
    /*
    Define the model's default state.
    @return array<string, mixed>
    */

    public function definition(): array
    {
        return [
            'userID' => fake()->randomElement(User::all()),
            'postID' => fake()->randomElement(Post::all()),
            'body' => fake()->sentences(3, true),
        ];
    }
}
