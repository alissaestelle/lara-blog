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
        dd(request('tag'));

        return view('app', [
            'posts' => Post::latest()->get(),
            'images' => (new Image())->render(),
            // 'tag' => $thisTag,
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
        extract($filters);

        $posts = Post::latest()->filter($filters)->get();
        // $tag = Tag::where('url', $tag)->first();
        $thisTag = Tag::where('url', $tag);
        // dd($test);

        return view('posts', [
            'posts' => $posts,
            // ↳ filter() is an alias for scopeFilter() located in the Post model.
            'tag' => $thisTag,
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
