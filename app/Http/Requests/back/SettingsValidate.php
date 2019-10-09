<?php

namespace App\Http\Requests\back;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Library\Translate;
use App\ModelLang;
use Route;
class SettingsValidate extends FormRequest
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
            'name' => "required|max:450|unique:settings,name,".$id,
            'value' => "required",
            'group' => "required|max:450|unique:settings,group,".$id,

        ];
    }
    public function attributes()
    {
        return [
            'name'      => 'Name',
            'Value'      => 'Value',
            'group' => 'Group',
        ];
    }
    public function all($data = null)
    {
        $input = parent::all();
        $request_data = Translate::mark_array($input,ModelLang::all());
        $this->replace($request_data);
        return parent::all();
    }
}
