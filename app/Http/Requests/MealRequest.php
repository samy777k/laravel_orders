<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MealRequest extends FormRequest
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
            'meal' => 'required|string',
            'price' => 'required|numeric',
            'category' => 'required',
            'image' => 'required'
        ];
    }

    public function message(){
        return [
        'meal.required' => "meal is reqiured",
        'meal.string' => "meal should be a string",
        'price.required' => "price should be required",
        'category.required' => "category is required",
        'image.required' => "image should be required"
    ];
    }
}
