<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class CommentController extends Controller
{
    function store(Post $post, CommentRequest $request)
    {
        extract($request->validated());
        $userID = Crypt::decryptString($userID);

        $comment = [
            'userID' => $userID,
            'body' => $body,
        ];

        $post->comments()->create($comment);

        return back();
    }
}
