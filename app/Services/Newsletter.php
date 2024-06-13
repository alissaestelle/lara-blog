<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

use MailchimpMarketing\ApiClient;
use MailchimpMarketing\ApiException;

class Newsletter
{
    function __construct(
        protected ApiClient $mailchimp,
        protected string $listID
    ) {
    }

    function subscribe($email)
    {
        $response = $this->mailchimp->lists->addListMember($this->listID, [
            'email_address' => $email,
            'status' => 'subscribed',
        ]);

        return $response;
    }
}
