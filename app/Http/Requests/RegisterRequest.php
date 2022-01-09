<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends  FormRequest
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
            "name" => "required",
            "phone" => "required",
            "email" => "required",
            "password" => "required",
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "Trường name không được để trống",
            "phone.required" => "Trường phone không được để trống",
            "email.required" => "Trường email không được để trống",
            "password.required" => "Trường password không được để trống",
        ];
    }
}
