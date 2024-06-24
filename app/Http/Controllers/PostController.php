<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;

use App\Models\Post;
use App\Models\Tag;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(Request $request)
    {
        return view('index', [
            'posts' => Post::latest()->paginate()->withQueryString(),
        ]);
    }

    public function search(Request $request)
    {
        $filters = $request->all();

        return view('posts.index', [
            'posts' => Post::latest()->filter($filters)->paginate()->withQueryString(),
            // ↳ filter() is an alias for scopeFilter() located in the Post model.
            'results' => collect($request->all()),
        ]);
    }

    public function postDetails(Post $post, Request $request)
    {
        // Post::where('url', $post)->find()
        $userID = $request->session()->has('userID') ? $request->session()->get('userID') : '';

        return view('posts.details', [
            'post' => $post,
            'comments' => $post->comments,
            'userID' => $userID,
        ]);
    }

    public function create()
    {
        $tags = Tag::all();

        return view('posts.create', [
            'tags' => $tags,
        ]);
    }

    public function store(PostRequest $request)
    {
        $attr = $request->all();
        $url = $attr['url'];

        // $chars = Str::random(5);
        $uniqID = uniqid();
        $duplicate = Post::where('url', '=', $url)->get();

        $attr['url'] = $duplicate ? "{$url}-{$uniqID}" : $url;
        $imgFile = $request->hasFile('image') ? $request->image : false;

        if ($imgFile) {
            $fileName = $imgFile->getClientOriginalName();
            $extension = $imgFile->getClientOriginalExtension();

            $fileName = pathinfo($fileName, PATHINFO_FILENAME);
            $fileName = Str::slug($fileName);
            $imgPath = "{$fileName}.{$extension}";

            $imgFile->storeAs('posts', $imgPath, 'resources');
            $attr['image'] = $imgPath;
        }

        Post::create($attr);

        return redirect('/')
            ->with('success', 'Your post is now live.')
            ->with('theme', 'text-[#B779AC] bg-[#F6EEF5]/25 border border-[#B779AC]');
    }
}
