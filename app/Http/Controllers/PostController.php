<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function index()
    {
        $tag = request('tag');

        return view('app', [
            'posts' => Post::latest()->get(),
            'tag' => Tag::where('url', $tag)->first(),
            'tags' => Tag::all(),
        ]);
    }

    function postDetails(Post $post)
    {
        // Post::where('url', $post)->find()

        return view('post', [
            'post' => $post,
        ]);
    }

    function search(Request $req)
    {
        $filters = $req->all();
        $tag = request('tag');

        return view('posts', [
            'posts' => Post::latest()->filter($filters)->get(),
            // ↳ filter() is an alias for scopeFilter() located in the Post model.
            'tag' => Tag::where('url', $tag)->first(),
            'tags' => Tag::all(),
        ]);
    }
}

/*
Alternate Query Syntax

if ($keyword) {
    $posts
        ->where(['title', 'LIKE', "%{$keyword}%"])
        ->where(['body', 'LIKE', "%{$keyword}%"]);
}
*/