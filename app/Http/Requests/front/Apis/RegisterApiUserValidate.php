<?php

namespace App\Http\Requests\front\Apis;

use Illuminate\Foundation\Http\FormRequest;

class RegisterApiUserValidate extends FormRequest
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
                'name' => 'required|min:3',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
             ];
    }
    public function attributes()
    {
        return [
            'email'     => 'Email',
            'name'      => 'Name',
            'password'  => 'Password',

        ];
    }

}
