<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    function __invoke(Request $request, Newsletter $newsletter)
    {
        $attributes = $request->validate(['email' => 'required']);
        extract($attributes);

        $newsletter->subscribe($email);

        return redirect('/#home')
            ->with('success', 'You have successfully subscribed to this newsletter.')
            ->with('theme', 'text-sky-600 bg-sky-50/25 border border-sky-600');
    }
}


// Note: If a Newsletter instance is not provided as the second parameter, Laravel will create one via manual instructions in the service provider.


// Logic was moved to the Newsletter class in the event that the JSON responses have different properties. This is only meant as a temporary solution.

/*
try {
    $response = $newsletter->subscribe($email);
} catch (RequestException $e) {
    $res = json_decode($e->getResponse()->getBody());

    $errMsg =
        $res->title === 'Member Exists'
            ? ['email.exists' => "Oops! You're already subscribed."]
            : ['email.invalid' => 'This email address could not be verified.'];

    throw ValidationException::withMessages($errMsg);
}
*/
