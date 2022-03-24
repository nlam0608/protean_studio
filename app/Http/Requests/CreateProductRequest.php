<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'name' =>'required',
            'category' =>'required',
            'price'=>'required',
            'quantity'=>'required',
            'image'=>'required',
            'status'=>'required',
        ];
    }
    public function message()
    {
        return[
            'name.required' => 'không để trống',
            'category.required' => 'không để trống',
            'price.required' => 'không để trống',
            'quantity.required' => 'không để trống',
            'status.required' => 'không để trống',
        ];
    }
}
