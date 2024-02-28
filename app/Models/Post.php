<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post
{
    // class Post extends Model
    // use HasFactory;

    function __construct(
        public string $title,
        public int $date,
        public string $tag,
        public string $excerpt,
        public string $body
    ) {
    }

    static function all()
    {
        $files = File::files(resource_path('posts/'));

        return array_map(fn($file) => $file->getContents(), $files);
    }

    static function find($p)
    {
        $path = resource_path("posts/{$p}.html");

        if (!file_exists($path)) {
            throw new ModelNotFoundException();
            // return redirect('/app');
        }

        return cache()->remember(
            "posts.{$p}",
            1200,
            fn() => file_get_contents($path)
        );
    }
}