<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SessionController;

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

// Guests
Route::get('/register', [AuthController::class, 'create'])->middleware('guest');
Route::post('/register', [AuthController::class, 'store'])->middleware('guest');

// Users
Route::post('/logout', [SessionController::class, 'destroy']);



/*
Old Get Req:

Route::get('/posts/{p}', function ($id) {
    return view('post', [
        'post' => Post::find($id),
    ]);
});
*/
