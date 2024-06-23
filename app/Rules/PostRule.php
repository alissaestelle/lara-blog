<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Crypt;

class PostRule implements ValidationRule
{
    /*
    Run the validation rule.
    @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
    */

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!$value) {
            $fail('This request could not be completed.');
        }
    }
}
