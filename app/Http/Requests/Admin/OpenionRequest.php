<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class OpenionRequest extends FormRequest
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
        $opinion = $this->route('opinion');

        $id = isset($opinion) ? $opinion->id : null ;

        return [
            'name_en'=>'required|string|unique:opinions,name_en,'.$id.',id',
            'name_ar'=>'required|string|unique:opinions,name_ar,'.$id.',id',
            'role_en'=>'required|string',
            'role_ar'=>'required|string',
            'title_en'=>'required|string',
            'title_ar'=>'required|string',
            'text_en'=>'required|string',
            'text_ar'=>'required|string',
            'counter' =>'required|string'
        ];
    }
}
