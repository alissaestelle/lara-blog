<?php

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


/*

Route::get('/', function () {
    return view('welcome');
});

*/

Route::get('/', function () {

    \Illuminate\Support\Facades\DB::listen(function ($q) {
        logger($q->sql);
    });

    return view('app', [
        'posts' => Post::latest('published')->with('author', 'tag')->get(),
    ]);
});

Route::get('/posts/{post:url}', function (Post $post) { // Post::where('url', $post)->find()
    return view('post', [
        'post' => $post,
    ]);
});

Route::get('/tag/{tag:url}', function (Tag $tag) { // Post::where('url', $post)->find()
    return view('app', [
        'posts' => $tag->posts,
    ]);
});

Route::get('/author/{author}', function (User $author) { // Post::where('url', $post)->find()
    return view('app', [
        'posts' => $author->posts,
    ]);
});

/*

Old Get Req:

Route::get('/posts/{p}', function ($id) {
    return view('post', [
        'post' => Post::find($id),
    ]);
});

*/