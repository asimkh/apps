<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ShoutFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // current user is authorized to interact with this form
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
            'contactName' => 'required',
            'contactEmail' => 'required|email',
            'contactMessage' => 'required',
           // 'recaptcha_response_field' => 'required|recaptcha',
        ];
    }
}
