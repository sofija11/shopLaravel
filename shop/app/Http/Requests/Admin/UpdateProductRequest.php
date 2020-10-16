<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            
                "productAdminUpdate" =>"required|alpha",
                "imageAdminUpdate" =>"required|mimes:jpeg,jpg,png|max:5000",
                "priceAdminUpdate" =>"required|numeric|max:5000",
                "categoryAdminUpdate" =>"required|not_in:0",
                "colorAdminUpdate" =>"required|not_in:0",
                "productAdminUpdate" =>"required"
     
     
             
        ];
    }
}
