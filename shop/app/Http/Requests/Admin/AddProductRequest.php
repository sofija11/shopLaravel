<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
           "productAdmin" =>"required|alpha",
           "imageAdmin" =>"required|mimes:jpeg,jpg,png|max:5000",
           "priceAdmin" =>"required|numeric|max:5000",
           "categoryAdmin" =>"required|not_in:0",
           "colorAdmin" =>"required|not_in:0",
           "productAdmin" =>"required"


        ];
    }
}
