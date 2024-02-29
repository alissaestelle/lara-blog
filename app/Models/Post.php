<?php

namespace App\Models;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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
        public string $url,
        public int $date,
        public string $tag,
        public string $excerpt,
        public string $body
    ) {
    }

    static function all()
    {
        $files = File::files(resource_path('posts'));

        function filterMeta($data)
        {
            extract($data->matter());
            return new Post($title, $url, $date, $tag, $excerpt, $data->body());
        }

        // Extracting Metadata & Content 
        $posts = collect($files)
            ->map(fn($file) => YamlFrontMatter::parseFile($file))
            ->map(fn($doc) => filterMeta($doc));

            // dd($posts[0]);
        return $posts;
    }

    static function find($p)
    {
        $post = static::all()->firstWhere('url', $p);
        return $post;
    }
}