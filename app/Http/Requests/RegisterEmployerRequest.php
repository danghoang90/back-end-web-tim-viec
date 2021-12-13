<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterEmployerRequest extends FormRequest
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
            'email' => 'required|email',
            'password'=> 'required|min:6',
            'contact_person_name'=> 'required|string|max:255',
            'phone_number'=> 'required|string|min:10',
            'name_employer' => 'required|string|max:255',
            'address-employer'=> 'required|string|max:255',
            'city'=> 'required|string|max:255',
            'status'=> 'required|string|max:255'
        ];
    }
}
