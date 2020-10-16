<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            "firstnameAdminUpdate" => "required|alpha|min:3|max:25",
            "lastnameAdminUpdate" => "required|alpha|min:3|max:25",
            "emailAdminUpdate" => "email|required|email",
            "roleAdminUpdate" => "required",
            //"password" => [ "required"|"regex:/^[a-zA-Z0-9-_]$/"|"min:6|max:20" ],
            "usernameAdminUpdate" =>  "required|min:6|max:20|",
            "passwordAdminUpdate" =>  "required|min:6|max:20|" 
        ];
    }
}
