<?php

namespace App\Http\Requests;

use App\Rules\CommentRule;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CommentRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;
    
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
            'userID' => ['bail', new CommentRule()],
            'body' => ['required'],
        ];
    }

    /*
    Get the error messages for the defined validation rules.
    @return array<string, string>
    */

    
    public function messages(): array
    {
        return [
            'userID' => 'You must have an account to comment on posts.',
            'body' => 'A body field is required.',
        ];
    }
}
