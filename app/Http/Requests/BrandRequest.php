<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
            'name' => [
                'required',
                Rule::unique('brands')->ignore($this->route()->parameter('brand')),
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
