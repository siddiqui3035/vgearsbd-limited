<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateBlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => [
                'required',
            ],
            'category' => [
                'required',
            ],
            'short_description' => [
                'required',
            ],
            'long_description' => [
                'required',
            ],
            'image' => [
                'nullable',
                'image:jpg,jpeg,png'
            ],
            'status' => [
                'required',
                Rule::in(['0', '1']),
            ],
        ];
    }
}
