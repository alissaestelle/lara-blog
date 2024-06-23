<?php

namespace App\Rules;

use Closure;

use App\Models\User;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

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
        $match = isset($user) ? Hash::check($value, $user->password) : false;

        if ($match) {
            auth()->login($user);
            session(['userID' => Crypt::encryptString($user->id)]);
        } else {
            $fail('This password could not be verified.');
        }
    }
}
