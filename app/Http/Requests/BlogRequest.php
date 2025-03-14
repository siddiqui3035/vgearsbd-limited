<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
        $rules = [
            'category' => [
                'required'
            ],
            'title' => [
                'required'
            ],
            'short_description' => [
                'required'
            ],
            'long_description' => [
                'required'
            ],
            'image' => [
                'required',
                'image'
            ],
        ];

        if ($this->isMethod('PUT')) {
            $rules = [
                'image' => [
                    'nullable',
                    'image'
                ],
            ];
        }

        return $rules;
    }
}
