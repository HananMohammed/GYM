<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use PhpParser\Node\Stmt\DeclareDeclare;

class ClassesCategoriesRequest extends FormRequest
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

        $rules = [
            "name_en" =>"required|string|unique:class_categories,name_en|max:255",
            "name_ar" =>"required|string|unique:class_categories,name_ar|max:255"
        ];

        if (in_array($this->method() , ['PUT' ,'PATCH']))
        {
            $class_categories = $this->route()->parameter('class_category');
            $rules["name_en"] =[
                'required',
                'string',
                'max:255',
                Rule::unique('class_categories')->ignore($class_categories),
            ];
            $rules["name_ar"] =[
                'required',
                'string',
                'max:255',
                Rule::unique('class_categories')->ignore($class_categories),
            ];
        }

        return $rules ;
    }
}
