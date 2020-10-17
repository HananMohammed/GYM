<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
             'title_en' => 'required|string',
             'title_ar' => 'required|string',
             'year' => 'required|numeric|digits:4|integer|min:1900',
             'text_en' => 'required|string',
             'text_ar' => 'required|string',
             'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000'
        ];
    }
}
