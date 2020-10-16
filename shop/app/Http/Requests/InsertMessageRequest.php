<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertMessageRequest extends FormRequest
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
            "caption"=>  "required|regex:/^[A-Za-z]{4,25}$/",
            "message"=> "required|regex:/^[ a-zA-Z0-9,!.?-]+$/"
        ];
    }
    public function messages(){
        return [
            
            "caption.regex" => 'Caption field is not in good format',
            "message.regex" => 'Message field is not in good format',


        ];
    }
}
