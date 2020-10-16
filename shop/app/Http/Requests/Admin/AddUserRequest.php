<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AddUserRequest extends FormRequest
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
            
            "firstnameAdmin" => "required|alpha|min:3|max:25",
            "lastnameAdmin" => "required|alpha|min:3|max:25",
            "emailAdmin" => "unique:user,email|required|email",
            "roleAdmin" => "required",
            //"password" => [ "required"|"regex:/^[a-zA-Z0-9-_]$/"|"min:6|max:20" ],
            "usernameAdmin" =>  "unique:user,username|required|min:6|max:20|",
            "passwordAdmin" =>  "required|min:6|max:20|" 
        ];
    }
}
