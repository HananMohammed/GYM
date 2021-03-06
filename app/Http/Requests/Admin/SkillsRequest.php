<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SkillsRequest extends FormRequest
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
            'title_en'=>'required|string',
            'title_ar'=>'required|string',
            'text_en'=>'required|string',
            'text_ar'=>'required|string',
            'image.*'=>'mimes:jpg,gif,jpeg,png,svg,max:10000',
        ];
    }
}
