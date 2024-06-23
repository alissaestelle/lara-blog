<?php

namespace App\Http\Requests;

use App\Rules\PostRule;

use Illuminate\Foundation\Http\FormRequest;

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
            'excerpt' => ['required'],
            'body' => ['required'],
        ];
    }
}