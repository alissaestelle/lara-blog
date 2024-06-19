<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{
    function index(Request $request)
    {
        return view('index', [
            'posts' => Post::latest()->paginate()->withQueryString(),
        ]);
    }

    function search(Request $request)
    {
        $filters = $request->all();
        // dd($req->all());

        return view('posts.index', [
            'posts' => Post::latest()->filter($filters)->paginate()->withQueryString(),
            // ↳ filter() is an alias for scopeFilter() located in the Post model.
            'results' => collect($request->all()),
        ]);
    }

    function postDetails(Post $post, Request $request)
    {
        // Post::where('url', $post)->find()
        $userID = $request->session()->has('userID') ? $request->session()->get('userID') : '';

        return view('posts.this', [
            'post' => $post,
            'comments' => $post->comments,
            'userID' => $userID,
        ]);
    }

    function create()
    {
        $tags = Tag::all();
        return view('posts.create', [
            'tags' => $tags
        ]);
    }
}
