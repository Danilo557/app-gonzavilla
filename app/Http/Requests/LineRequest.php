<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LineRequest extends FormRequest
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

        $line = $this->route()->parameter('line');

        $rules = [
            'name' => 'required',
            'slug' => 'required|max:255|unique:lines',
            'status'=>'required'
        ];

        if ($line) {
            
            $rules['slug'] = 'required|max:255|unique:lines,slug,' . $line->id;
        }

        return $rules;
    }
}
