<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use App\Models\Tag;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function index()
    {
        return view('app', [
            'posts' => Post::latest('published')->get(),
            // 'posts' => Post::latest('published')->with('author', 'tag')->get(),
            'images' => (new Image())->render(),
            'tags' => Tag::all(),
        ]);
    }

    function search(Request $req)
    {
        extract($req->all());
        $posts = Post::latest();

        if ($keyword) {
            $posts->where('body', 'LIKE', "%{$keyword}%");
        }

        return view('posts', [
            'posts' => $posts->get(),
            'tags' => Tag::all(),
        ]);
    }
}
