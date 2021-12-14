<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'code' => 'required',
            'title' => 'required',
            'salary' => 'required',
            'position' => 'required',
            'experience' => 'required',
            'expiration_date' => 'required|date',
            'description' => 'required',
            'quantity' => 'required',
            'gender' => 'required',
            'city_id' => 'required',
            'job_id' => 'required',
        ];
    }
}
