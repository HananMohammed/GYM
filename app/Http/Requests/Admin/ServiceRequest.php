<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
        $service = $this->route('service');

        $id = isset($service) ? $service->id : null ;

        return [
            'title_en'=>'required|string|unique:services,title_en,'.$id.',id',
            'title_ar'=>'required|string|unique:services,title_ar,'.$id.'.id',
            'text_en'=>'required|string',
            'text_ar'=>'required|string',
            'category'=>'required',
            'image.*'=>'mimes:jpg,gif,jpeg,png,svg,max:10000',
        ];
    }
}
