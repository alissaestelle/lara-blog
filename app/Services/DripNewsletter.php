<?php

namespace App\Services;

use Illuminate\Validation\ValidationException;

class DripNewsletter implements Newsletter
{
    function __construct(protected object $drip, protected string $dripKey)
    {
    }

    function subscribe($email)
    {
        try {
            $this->drip->list[] = $email;
        } catch (ValidationException $e) {
            $errMsg = ['error' => "Oops! Something went wrong. Please try again later."];

            throw ValidationException::withMessages($errMsg);
        }

        return;
    }
}
