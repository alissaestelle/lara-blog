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
    // foreach ($files as $file) {
    //     $doc = YamlFrontMatter::parseFile($file);
    //     extract($doc->matter());

    //     $posts[] = new Post($title, $date, $tag, $excerpt, $doc->body());
    // }

    return view('app', [
        'posts' => Post::all(),
    ]);
});

Route::get('/posts/{p}', function ($p) {
    return view('post', [
        'post' => Post::find($p),
    ]);
});