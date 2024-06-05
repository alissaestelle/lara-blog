<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class LoginRequest extends FormRequest
{
    /*
    Determine if the user is authorized to make this request.
    */

    public function authorize(): bool
    {
        return true;
    }

    /*
    Configure the validator instance.
    @param  \Illuminate\Validation\Validator  $validator
    @return void
    */

    /*
    function withValidator($validator)
    {
        dd($validator);
        $validator->after(fn($validator) => Hash::check($this, $this->user()->password));
        return;
    }
    */

    /*
    Get the validation rules that apply to the request.
    @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
    */

    public function rules(): array
    {
        // extract(request()->input());

        return [
            'email' => ['required', 'email', Rule::exists('users', 'email')],
            'password' => ['required'],
        ];
    }

    /*
    Get the error messages for the defined validation rules.
    @return array<string, string>
    */

    public function messages(): array
    {
        return [
            'email' => 'This email address could not be verified.',
            'password' => 'This password could not be verified.',
        ];
    }
}
