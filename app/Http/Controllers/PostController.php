<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;

use App\Models\Post;
use App\Models\Tag;

// use Faker\Generator as Faker;

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

    /* ADMIN METHODS */

    public function posts(Request $request)
    {
        return view('admin.posts.index', [
            'posts' => Post::latest()->paginate(),
            // 'author' =>
        ]);
    }

    public function create()
    {
        $tags = Tag::all();

        return view('admin.posts.create', [
            'tags' => $tags,
        ]);
    }

    protected function postURL($url)
    {
        $duplicate = Post::where('url', '=', $url)->count();

        if ($duplicate) {
            $words = \Faker\Factory::create()->unique()->words(2);
            $words = "{$words[0]}-{$words[1]}";

            $url = "{$url}-{$words}";
            $this->postURL($url);
        }

        return $url;
    }

    protected function postImage($image)
    {
        $fileName = $image->getClientOriginalName();
        $extension = $image->getClientOriginalExtension();

        $fileName = pathinfo($fileName, PATHINFO_FILENAME);
        $fileName = Str::slug($fileName);
        $imgPath = "{$fileName}.{$extension}";

        $image->storeAs('posts', $imgPath, 'resources');

        return $imgPath;
    }

    public function store(PostRequest $request)
    {
        $attr = $request->all();

        $attr['url'] = $this->postURL($attr['url']);
        $attr['image'] = $this->postImage($attr['image']);

        Post::create($attr);

        return redirect('/')
            ->with('success', 'Your post is now live.')
            ->with('theme', 'text-[#B779AC] bg-[#F6EEF5]/25 border border-[#B779AC]');
    }
}
