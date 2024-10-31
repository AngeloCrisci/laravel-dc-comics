<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMangaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'title' =>  'required|unique:comics|string|min:3|max:100',
            'description' => 'required|string|min:3|max:255',
            'price' => 'required',
            'thumb' => 'required|url:http,https',
            'author' => 'required|string|min:3|max:100',
        ];
    }
}
