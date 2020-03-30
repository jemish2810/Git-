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
            
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email',
            'phone_number' => 'required',
            'gender'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
    public function messages()
    {
        return [
       
            'firstname.required' => 'An Name is required',
            'lastname.required' => 'An Name is required',
            'email.required'  => 'An Email is required',
            'phone_number.required'  => 'The phone_number is required',
            'gender.required'=> 'Gender is required',
            
        ];
    }
}
