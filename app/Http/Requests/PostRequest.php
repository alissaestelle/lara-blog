<?php

namespace App\Http\Requests;

use App\Rules\PostRule;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostRequest extends FormRequest
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
            'authorID' => ['required', new PostRule()],
            'tagID' => ['required', Rule::exists('tags', 'id')],
            'title' => ['required'],
            'image' => ['file', 'image', 'max:10240'],
            'url' => ['required'],
            // 'url' => ['required', Rule::unique('posts', 'url')],
            'excerpt' => ['required'],
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
            'image' => 'Oops! This file is too large.',
            'url' => 'This url has already been taken.',
        ];
    }
}
