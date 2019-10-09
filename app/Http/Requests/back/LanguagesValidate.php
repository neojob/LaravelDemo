<?php

namespace App\Http\Requests\Back;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Library\Translate;
use App\ModelLang;
use Route;
class LanguagesValidate extends FormRequest
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
        $id  =  Route::current()->parameter('id') ? Route::current()->parameter('id') : null;

        return [
            'name' => "required|max:50|unique:langs,name,".$id,
            'iso' => "required|min:2|max:2|unique:langs,iso,".$id,
            'primary'=> 'required'
        ];
    }
    public function attributes()
    {
        return [
            'name'      => 'Name',
            'iso'      => 'Iso',
        ];
    }

}
