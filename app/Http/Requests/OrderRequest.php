<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'name' => 'required|string',
            'phone' => 'required',
            'location' => 'required|string',
            'quentity' => 'required|numeric'
        ];
    }

    public function messege(){
        return[
        'name.required' => "name is require",
        'name.string' => "name should be string",
        'phone.required' => "phone is require",
        'location.required' => "location is require",
        'location.string' => 'location should be string',
        'quentity.required' => 'quentity is require',
    ];
    }
}
