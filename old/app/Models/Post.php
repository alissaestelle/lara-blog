<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;

class Post
{
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
        //  1. Extract Metadata & Content from YFM Pkg
        //  2. Move Metadata/Content to Post Obj

        $files = File::files(resource_path('posts'));

        function filterMeta($data)
        {
            extract($data->matter());
            return new Post($title, $url, $date, $tag, $excerpt, $data->body());
        }

        $posts = collect($files)
            // Map Over Each File & Get File Contents
            ->map(fn($file) => YamlFrontMatter::parseFile($file))
            // Move Those Contents to New Post Obj
            ->map(fn($doc) => filterMeta($doc))
            ->sortByDesc('date');

        // Cache Post Array to Minimize Repetitive Tasks

        // $cache = cache()->remember(
        //     'posts.all', 60,
        //     fn() => $posts);

        // Return Cached Array
        return $posts;
    }

    static function find($p)
    {
        $post = static::all()->firstWhere('url', $p);

        $post ?? throw new ModelNotFoundException();

        return $post;
    }
}