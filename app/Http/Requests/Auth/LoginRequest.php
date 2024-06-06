<?php

namespace App\Http\Requests\Auth;
use App\Rules\PasswordRule;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
    Get the validation rules that apply to the request.
    @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
    */

    public function rules(): array
    {
        return [
            'email' => ['required', 'email', Rule::exists('users', 'email')],
            'password' => ['required', new PasswordRule()],
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
        ];
    }
}
