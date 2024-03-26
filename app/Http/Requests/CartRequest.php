<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CartRequest extends FormRequest
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
            'product_id' => [
                'required',
                Rule::exists('products', 'id'),
            ],

            'product_qty' => [
                'required',
                'integer',
                'max:10',
                'min:1'
            ],
        ];

        if ($this->isMethod('PUT')) {
            $rules = [
                'product_id' => [
                    'nullable',
                    Rule::exists('products', 'id'),
                ],
            ];

            $rules = [
                'product_qty' => [
                    'required',
                    'integer',
                    'max:10',
                    'min:1'
                ],
            ];
        }

        return $rules;


    }
}
