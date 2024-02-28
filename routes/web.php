<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $files = File::files(resource_path('posts/'));

    $posts = collect($files)
        ->map(fn($file) => YamlFrontMatter::parseFile($file))
        ->map(
            fn($doc) => extract($doc->matter()) &&
                new Post($title, $date, $tag, $excerpt, $doc->body())
        );

    // foreach ($files as $file) {
    //     $doc = YamlFrontMatter::parseFile($file);
    //     extract($doc->matter());

    //     $posts[] = new Post($title, $date, $tag, $excerpt, $doc->body());
    // }

    return view('app', [
        'posts' => $posts,
    ]);
});

Route::get('/posts/{p}', function ($p) {
    $path = base_path("resources/posts/{$p}.html");
    $body = YamlFrontMatter::parseFile($path)->body();

    return view('post', [
        'post' => $body,
    ]);
});