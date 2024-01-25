<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeatureRequest extends FormRequest
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
        $feature=$this->route()->parameter('feature');

        $rules= [
            'name'=>'required',
            'slug' => 'required|max:255|unique:features',
        ];

        if($feature){
            $rules['slug']= 'required|max:255|unique:features,slug,'.$feature->id;
        }

        return $rules;
    }
}
