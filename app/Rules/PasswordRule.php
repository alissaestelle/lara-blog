<?php

namespace App\Rules;

use Closure;

use App\Models\User;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Hash;

class PasswordRule implements ValidationRule
{
    /*
    Run the validation rule.
    @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
    */

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        extract(request()->input());

        $user = User::where('email', $email)->first();
        $match = Hash::check($value, $user->password);

        $match ? auth()->login($user) : $fail('This password could not be verified.');
    }
}
