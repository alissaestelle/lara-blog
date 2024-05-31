<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SessionController;
use App\Http\Controllers\PostController;

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
Route::get('/search?author={author:url}', [PostController::class, 'search']);

// New Users
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');
// ↳ Guest middleware is assigned to anyone who is NOT logged in as a user.

// Existing Users
Route::get('/login', [SessionController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest');

Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');
// ↳ Auth middleware is assigned to anyone who IS logged in as a user.

/*
Old Get Req:

Route::get('/posts/{p}', fn ($id) => view('post', ['post' => Post::find($id)]));
*/

/*
Alpine Req:

Route::get(
    '/alpine',
    fn () => include '/Users/alissa/Desktop/KML/lara_sandbox/lara-blog/resources/views/alpine.blade.php'
);
*/