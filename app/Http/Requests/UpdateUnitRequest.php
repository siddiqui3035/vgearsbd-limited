<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUnitRequest extends FormRequest
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
            'name' => [
                'required'
            ],
            'short_name' => [
                'required'
            ],
            'unit_type' => [
                'required'
            ],
            'operator' => [
                'required'
            ],
            'operator_value' => [
                'required'
            ],
            'status' => [
                'required',
                Rule::in(['0', '1']),
            ],
        ];
    }
}
