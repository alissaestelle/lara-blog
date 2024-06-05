<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Post;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    function store(Post $post, CommentRequest $request)
    {

        $validator = $request->stopOnFirstFailure() ?: $request->validated();

        if ($validator) {
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
