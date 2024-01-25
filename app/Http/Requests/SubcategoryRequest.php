<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubcategoryRequest extends FormRequest
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
        $subcategory = $this->route()->parameter('subcategory');

        $rules = [
            'name' => 'required',
            'slug' => 'required|max:255|unique:subcategories',
            'category_id'=>'required'
        ];

        if ($subcategory) {
            $rules['slug'] = 'required|max:255|unique:subcategories,slug,' . $subcategory->id;
        }

        return $rules;
    }
}
