<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Validate_Customer extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone_number' => 'required|numeric'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'An Name is required',
            'email.required'  => 'An Email is required',
            'phone_number.required'  => 'The phone_number is required',
        ];
    }
}
