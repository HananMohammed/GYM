<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ClassFeatureRequest extends FormRequest
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
            "category"=>"required",
            "course"=>"required",
            "students"=>"required|numeric",
            "duration"=>"required|numeric",
            "shift"=>"required|string",
            "price"=>"required|numeric",
        ];
    }
}
