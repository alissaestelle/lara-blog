<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /*
    Seed the application's database.
    */

    public function run(): void
    {
        User::factory(1)->create([
            'name' => 'Alissa Wiley',
            'username' => 'alissa.estelle',
            'url' => 'alissa-estelle',
            'email' => 'alissa@wiley.com',
            'verified' => now(),
            'password' => '12345678',
            'remember_token' => Str::random(10),
        ]);

        User::factory(9)->create();
        Tag::factory(10)->create();
        Post::factory(25)->create();
        Comment::factory(50)->create();
    }
}
