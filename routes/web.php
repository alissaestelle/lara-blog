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

// General
Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/posts/{post:url}', [PostController::class, 'postDetails']);

// Searches
Route::get('/search', [PostController::class, 'search']);
Route::get('/search?tag={tag:url}', [PostController::class, 'search']);

Route::get('/author/{author:url}', function (User $author) {
    return view('posts', [
        'posts' => $author->posts
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
