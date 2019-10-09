<?php

namespace App\Http\Requests\Back;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Library\Translate;
use App\ModelLang;
use Route;
class EntitiesValidate extends FormRequest
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
            'word' => "required|max:800|unique:entities,word,".$id,
            'translation' => "required",
        ];
    }
    public function attributes()
    {
        return [
            'word'      => 'Word',
            'translation'      => 'Translation',
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
