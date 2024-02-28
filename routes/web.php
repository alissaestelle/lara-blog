<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/app', function () {
    return view('app');
});

Route::get('/posts/{p}', function ($p) {
    $path = __DIR__ . "/../resources/posts/{$p}.html";

    if (!file_exists($path)) {
        return redirect('/app');
    }

    $post = cache()->remember(
        "posts.{$p}",
        1200,
        fn() => file_get_contents($path)
    );

    return view('post', [
        'post' => $post,
    ]);
});
