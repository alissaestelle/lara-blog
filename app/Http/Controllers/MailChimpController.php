<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

use MailchimpMarketing\ApiClient as Mailchimp;

class MailChimpController extends Controller
{
    function store(Request $request)
    {
        $attributes = $request->validate(['email' => 'required|email']);
        extract($attributes);

        $mailchimp = new Mailchimp();

        $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us17',
        ]);

        try {
            $mailchimp->lists->addListMember('36f96b67a3', [
                'email_address' => $email,
                'status' => 'subscribed',
            ]);
        } catch (\Throwable $th) {
            // Log::error($th->getMessage());

            // $res = $mailchimp->searchMembers->search($email);
            // $res = $res->exact_matches->total_items;

            throw ValidationException::withMessages([
                'email' => 'This email address could not be verified.',
            ]);
        }

        return redirect('/')
            ->with('success', 'You have successfully subscribed to this newsletter.')
            ->with('theme', 'text-sky-600 bg-sky-50/25 border border-sky-600');
    }
}
