<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Post;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    function store(Post $post, Request $request)
    {
        $request->stopOnFirstFailure() ?: $request->validated();

        if ($request) {
            extract($request->input());

            $comment = [
                'userID' => $userID,
                'body' => $body,
            ];

            $post->comments()->create($comment);

            return back();
        }
    }
}
