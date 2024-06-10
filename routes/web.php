<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SessionController;

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Route;

use MailchimpMarketing\ApiClient;

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

// Mailchimp
Route::get('/lists', function () {
    $mailchimp = new \MailchimpMarketing\ApiClient();

    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us17',
    ]);

    // $response = $mailchimp->lists->getAllLists();
    // $response = $mailchimp->lists->getList('36f96b67a3');
    // $response = $mailchimp->lists->getListMembersInfo('36f96b67a3');
    $response = $mailchimp->lists->addListMember('36f96b67a3', [
        'email_address' => 'mildflowerchild@gmail.com',
        'status' => 'subscribed'
    ]);
    dd($response);
});

// General
Route::get('/', [PostController::class, 'index'])->name('home');

// New Users
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');
// ↳ Guest middleware is assigned to anyone who is NOT logged in as a user.

// Existing Users
Route::get('/login', [SessionController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest');

Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');
// ↳ Auth middleware is assigned to anyone who IS logged in as a user.

// Searches
Route::get('/search', [PostController::class, 'search']);
Route::get('/search?tag={tag:url}', [PostController::class, 'search']);
Route::get('/search?author={author:url}', [PostController::class, 'search']);

// Posts x Comments
Route::get('/posts/{post:url}', [PostController::class, 'postDetails']);
Route::post('/posts/{post:url}/comments', [CommentController::class, 'store']);

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
