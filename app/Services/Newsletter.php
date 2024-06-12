<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class Newsletter
{
    function __construct(protected ApiClient $mailchimp)
    {}

    /*
    function __construct(public mixed $apiKey = '', public mixed $listID = '')
    {
        $this->apiKey = $apiKey ?: config('services.mailchimp.key');
        $this->listID = $listID ?: config('services.mailchimp.lists.subscribers');
    }
    */

    function client()
    {
        // dd($apiKey);
        $apiKey = config('services.mailchimp.key');

        $connection = $this->mailchimp->setConfig([
            'apiKey' => $apiKey,
            'server' => 'us17',
        ]);

        return $connection;
    }

    function subscribe($email)
    {
        $listID = config('services.mailchimp.lists.subscribers');

        $response = $this->client()->lists->addListMember($listID, [
            'email_address' => $email,
            'status' => 'subscribed',
        ]);

        return $response;
    }
}
