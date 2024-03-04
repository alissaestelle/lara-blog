<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Str;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /*
     * Seed the application's database.
     */

    public function run(): void
    {
        User::truncate();
        Tag::truncate();
        Post::truncate();

        $alissa = User::create([
            'name' => 'Alissa Wiley',
            'email' => 'a@wiley.com',
            'verified' => now(),
            'password' => '12345678',
            'remember_token' => Str::random(10)
        ]);

        $livvy = User::create([
            'name' => 'Livvy Wiley',
            'email' => 'l@wiley.com',
            'verified' => now(),
            'password' => '12345678',
            'remember_token' => Str::random(10)
        ]);

        $consciousness = Tag::create([
            'name' => 'Consciousness',
            'url' => 'consciousness',
        ]);

        $frenchPoetry = Tag::create([
            'name' => 'French Poetry',
            'url' => 'french-poetry',
        ]);

        $dreamSymbols = Tag::create([
            'name' => 'Dream Symbols',
            'url' => 'dream-symbols',
        ]);

        Post::create([
            'userID' => $alissa->id,
            'tagID' => $consciousness->id,
            'title' => 'No. 1',
            'url' => 'no-1',
            'published' => '2022-02-22',
            'excerpt' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'body' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In nulla posuere sollicitudin aliquam ultrices sagittis orci. Congue mauris rhoncus aenean vel elit scelerisque mauris pellentesque. Egestas sed tempus urna et pharetra pharetra massa. Egestas sed tempus urna et pharetra pharetra. Mattis molestie a iaculis at erat pellentesque. Libero nunc consequat interdum varius sit amet. Ligula ullamcorper  malesuada proin libero nunc consequat interdum varius sit. Id diam maecenas ultricies mi eget. Sit amet risus nullam eget felis. Pellentesque elit eget gravida cum sociis natoque. Sit amet consectetur adipiscing elit pellentesque habitant morbi. Bibendum neque egestas congue quisque. Semper risus in hendrerit gravida rutrum quisque. Vitae elementum curabitur vitae nunc sed velit.',
        ]);

        Post::create([
            'userID' => $alissa->id,
            'tagID' => $frenchPoetry->id,
            'title' => 'No. 2',
            'url' => 'no-2',
            'published' => '2022-10-10',
            'excerpt' =>
                'In nulla posuere sollicitudin aliquam ultrices sagittis orci. Congue mauris rhoncus aenean vel elit scelerisque mauris pellentesque.',
            'body' =>
                'Donec pretium vulputate sapien nec. A iaculis at erat pellentesque adipiscing commodo. Auctor eu augue ut lectus arcu bibendum at varius vel. A erat nam at lectus urna duis convallis. Massa placerat duis ultricies lacus sed. Egestas diam in arcu cursus euismod quis. At ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Pulvinar sapien et ligula ullamcorper malesuada. Scelerisque fermentum dui faucibus in ornare quam. Sed turpis tincidunt id aliquet risus feugiat. Elementum facilisis leo vel fringilla est.',
        ]);

        Post::create([
            'userID' => $livvy->id,
            'tagID' => $dreamSymbols->id,
            'title' => 'No. 3',
            'url' => 'no-3',
            'published' => '2022-11-01',
            'excerpt' =>
                'Libero nunc consequat interdum varius sit amet. Ligula ullamcorper malesuada proin libero nunc consequat interdum varius sit.',
            'body' =>
                'Luctus accumsan tortor posuere ac ut consequat semper viverra nam. At erat pellentesque adipiscing commodo. Euismod nisi porta lorem mollis aliquam ut porttitor leo a. Volutpat sed cras ornare arcu dui. Aliquet nec ullamcorper sit amet risus. Porttitor massa id neque aliquam. Facilisis sed odio morbi quis commodo. Pellentesque dignissim enim sit amet venenatis. Urna cursus eget nunc scelerisque. Consectetur adipiscing elit duis tristique sollicitudin nibh.',
        ]);

        Post::factory(7)->create();
    }
}