<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SessionController;

use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostController;

use Database\Seeders\DatabaseSeeder;
use Illuminate\Support\Facades\Route;
use MailchimpMarketing\ApiClient as Mailchimp;

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

/* AUTH ROUTES START */

// New Users
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');
// ↳ Guest middleware is assigned to anyone who is NOT logged in as a user.

// Existing Users
Route::get('/login', [SessionController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest');
Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');
// ↳ Auth middleware is assigned to anyone who IS logged in as a user.

/* AUTH ROUTES END */

/* POST ROUTES START */

// General
Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/posts/{post:url}', [PostController::class, 'postDetails']);

// Searches
Route::get('/search', [PostController::class, 'search']);
Route::get('/search?tag={tag:url}', [PostController::class, 'search']);
Route::get('/search?author={author:url}', [PostController::class, 'search']);

// Admin
Route::get('/admin/post/create', [PostController::class, 'create'])->middleware('admin');
Route::post('/admin/post/store', [PostController::class, 'store'])->middleware('admin');
Route::get('/admin/post/edit', [PostController::class, 'edit'])->middleware('admin');

// Auth → Users
Route::get('/profile', [SessionController::class, 'profile'])->middleware('auth');
Route::post('/posts/{post:url}/comments', [CommentController::class, 'store']);

/* POST ROUTES END */

/* NEWSLETTER ROUTES START */

// Mailchimp Test
Route::get('/lists', function () {
    $mailchimp = new Mailchimp();

    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us17',
    ]);

    dd($mailchimp);

    // $allLists = $mailchimp->lists->getAllLists();
    // $thisList = $mailchimp->lists->getList('36f96b67a3');
    // $members = $mailchimp->lists->getListMembersInfo('36f96b67a3');

    // dd($members);
});

// Drip Test/Example
// ↳ 

Route::post('/drip', NewsletterController::class);

// Subscribers
Route::post('/subscribe', NewsletterController::class);
// ↳ NewsletterController is a single-service controller, meaning it only contains one method (unlike standard controllers which contain many). This controller is auto-instantiated via the __invoke() method (located in NewsletterController.php)

/* NEWSLETTER ROUTES END */

/*
Old Get Req:
↳ Route::get('/posts/{p}', fn ($id) => view('post', ['post' => Post::find($id)]));

Alpine Req:

Route::get(
    '/alpine',
    fn () => include '/Users/alissa/Desktop/KML/lara_sandbox/lara-blog/resources/views/alpine.blade.php'
);
*/
