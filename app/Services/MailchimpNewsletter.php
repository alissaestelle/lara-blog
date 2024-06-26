<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

use Illuminate\Validation\ValidationException;

use MailchimpMarketing\ApiClient;

class MailchimpNewsletter implements Newsletter
{
    function __construct(protected ApiClient $mailchimp, protected string $listID)
    {
    }

    function subscribe($email)
    {
        try {
            $response = $this->mailchimp->lists->addListMember($this->listID, [
                'email_address' => $email,
                'status' => 'subscribed',
            ]);
        } catch (RequestException $e) {
            $exception = json_decode($e->getResponse()->getBody());

            $errMsg =
                $exception->title === 'Member Exists'
                    ? ['email.exists' => "Oops! You're already subscribed."]
                    : ['email' => 'This email address could not be verified.'];

            throw ValidationException::withMessages($errMsg);
        }

        return $response;
    }
}
