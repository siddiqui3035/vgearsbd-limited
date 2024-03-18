<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            "category_id" => [
                "required",
                Rule::exists("categories", "id"),
            ],
            "brand_id" => [
                "required",
                Rule::exists("brands", "id"),
            ],
            "unit_id" => [
                "required",
                Rule::exists("units", "id"),
            ],
            "purchase_unit_id" => [
                "required",
                Rule::exists("units", "id"),
            ],
            "sale_unit_id" => [
                "required",
                Rule::exists("units", "id"),
            ],
            "name" => [
                "required",
                "string",
                Rule::unique("products")->ignore($this->route("product")),
            ],
            "qty" => [
                "required",
            ],
            "product_code" => [
                "required",
                "string",
                Rule::unique("products", "product_code")->ignore($this->route("product")),
            ],
            "purchase_price" => [
                "required",
                "numeric",
                "between:1,99999999999999",
            ],
            "sale_price" => [
                "required",
                "numeric",
                "between:1,99999999999999",
            ],
            "details" => [
                'required'
            ],
            "packaging_type" => [
                'required'
            ],
            'images.*' => [
                'nullable',
                'image:jpg,jpeg,png',
                'max:5120',
            ]
        ];
    }
}
