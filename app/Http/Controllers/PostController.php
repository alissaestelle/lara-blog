<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function index()
    {
        return view('index', [
            'posts' => Post::latest()->paginate()->withQueryString(),
        ]);
    }

    function search(Request $req)
    {
        $filters = $req->all();
        // dd($req->all());

        return view('posts', [
            'posts' => Post::latest()->filter($filters)->paginate()->withQueryString(),
            // ↳ filter() is an alias for scopeFilter() located in the Post model.
            'results' => collect($req->all())
        ]);
    }

    function postDetails(Post $post)
    {
        // Post::where('url', $post)->find()

        return view('post', [
            'post' => $post,
        ]);
    }
}