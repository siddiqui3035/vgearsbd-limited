<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'country' => [
                'required',
                Rule::in(['bangladesh'])
            ],
            'address' => [
                'required'
            ],
            'city' => [
                'required'
            ],
            'postal_code' => [
                'required'
            ],
            'payment_method' => [
                'required',
                Rule::in(['cod'])
            ]
        ];
    }
}
