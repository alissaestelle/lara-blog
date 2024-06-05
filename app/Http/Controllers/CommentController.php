<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Post;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    function store(Post $post, CommentRequest $comReq, Request $request)
    {
        // dd($comReq);
        extract($request->all());
        $user = $request->user()->id ?? false;

        $valid = $request->validate([
            'body' => 'required',
        ]);

        if ($user && $valid) {
            $comment = [
                'userID' => $request->user()->id,
                'body' => $body,
            ];

            $post->comments()->create($comment);
        }

        return back();
    }
}
