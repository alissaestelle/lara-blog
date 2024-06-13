<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

use MailchimpMarketing\ApiClient;

class MailchimpNewsletter implements Newsletter
{
    function __construct(protected ApiClient $mailchimp, protected string $listID)
    {
    }

    function subscribe($email)
    {
        try {
            $results = $this->mailchimp->lists->addListMember($this->listID, [
                'email_address' => $email,
                'status' => 'subscribed',
            ]);

            $response = [200, $results];
        } catch (RequestException $e) {
            $exception = json_decode($e->getResponse()->getBody());

            $exception =
                $exception->title === 'Member Exists'
                    ? ['email.exists' => "Oops! You're already subscribed."]
                    : ['email.invalid' => 'This email address could not be verified.'];

            $response = [400, $exception];
        }

        return $response;
    }
}
