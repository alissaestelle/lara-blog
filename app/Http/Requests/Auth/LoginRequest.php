<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
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
    Get the validation rules that apply to the request.
    @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
    */

    public function rules(): array
    {
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
            'email' => 'The provided email is invalid.',
            'password' => 'The provided password is incorrect.',
        ];
    }
}
