<?php

use App\Http\Controllers\PostController;
use App\Models\Image;
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

/*
\Illuminate\Support\Facades\DB::listen(function ($q) {
    logger($q->sql);
});
*/

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/search', [PostController::class, 'search']);

Route::get('/posts/{post:url}', function (Post $post) {
    // Post::where('url', $post)->find()
    return view('post', [
        'post' => $post,
    ]);
});

Route::get('/tag/{tag:url}', function (Tag $tag) {
    // Tag::where('url', $tag)->find()
    return view('posts', [
        'posts' => $tag->posts,
        'tag' => $tag,
        'tags' => Tag::all(),
    ]);
});

Route::get('/author/{author:url}', function (User $author) {
    return view('posts', [
        'posts' => $author->posts,
        'tags' => Tag::all(),
    ]);
});

Route::get('/test', function (User $author) {
    return view('posts', [
        'posts' => Post::latest('published')->get(),
        'images' => (new Image())->render(),
        'tags' => Tag::all(),
    ]);
});

Route::get('/details', function (User $author) {
    // Post::where('url', $author)->find()
    return view('details-test');
});

/*

Old Get Req:

Route::get('/posts/{p}', function ($id) {
    return view('post', [
        'post' => Post::find($id),
    ]);
});

*/
