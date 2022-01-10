<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFoodRequest extends FormRequest
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
            'name' => 'required',
            'restaurant' => 'required',
            'category' => 'required',
            'note' => 'required',
            'price' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'restaurant.required' => 'Ghi chú không được để trống',
            'category.required' => 'Giá không được để trống',
            'note.required' => 'Giá không được để trống',
            'price.required' => 'Giá không được để trống',
        ];
    }
}
