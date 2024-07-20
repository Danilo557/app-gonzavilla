<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrancheRequest extends FormRequest
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

        $rules= [
            'address'=>'required',
            'phone' => ['required', 'regex:/^[0-9]{9}/'],
            'whatsapp' => ['required', 'regex:/^[0-9]{9}/'],
            'state_id' => 'required|exists:states,id',
            'municipality_id' => 'required|exists:municipalities,id',
            'map'=>'required'
        ];
        return $rules;
    }
}
