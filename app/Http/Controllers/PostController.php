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

    function search(Request $request)
    {
        $filters = $request->all();
        // dd($req->all());

        return view('posts', [
            'posts' => Post::latest()->filter($filters)->paginate()->withQueryString(),
            // ↳ filter() is an alias for scopeFilter() located in the Post model.
            'results' => collect($request->all()),
        ]);
    }

    function postDetails(Post $post, Request $request)
    {
        // Post::where('url', $post)->find()

        return view('post', [
            'post' => $post,
            'comments' => $post->comments,
            'userID' => $request->session()->get('userID')
        ]);
    }
}
