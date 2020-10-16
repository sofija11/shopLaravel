<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertUserRequest extends FormRequest
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
            
            "firstname" => "required|alpha|min:3|max:25",
            "lastname" => "required|alpha|min:6|max:25",
            "email" => "unique:user,email|required|email",
            "confirmPassword" =>"required|same:password",
            //"password" => [ "required"|"regex:/^[a-zA-Z0-9-_]$/"|"min:6|max:20" ],
            "username" =>  "unique:user,username|required|min:6|max:20|",
            "password" =>   ['required',
            'regex:/(?=.*[a-z])(?=.*[0-9])(?=.{6,})/ ',
        ]
               
        ];
    }
   
}
