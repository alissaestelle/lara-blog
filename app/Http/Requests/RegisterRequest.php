<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
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
            'name' => ['required', 'max:125'],
            'username' => ['required', 'min:7', 'max:125', Rule::unique('users', 'username')],
            'email' => ['required', 'email', 'max:125', Rule::unique('users', 'email')],
            'password' => ['required', 'min:7', 'max:20']
        ];
    }
}
