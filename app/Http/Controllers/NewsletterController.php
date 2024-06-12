<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    function __invoke(Request $request, Newsletter $newsletter)
    {
        $attributes = $request->validate(['email' => 'required|email']);
        extract($attributes);

        try {
            $newsletter->subscribe($email);
        } catch (\Throwable $th) {
            throw ValidationException::withMessages([
                'email' => 'This email address could not be verified.',
            ]);
        }

        return redirect('/')
            ->with('success', 'You have successfully subscribed to this newsletter.')
            ->with('theme', 'text-sky-600 bg-sky-50/25 border border-sky-600');
    }
}
