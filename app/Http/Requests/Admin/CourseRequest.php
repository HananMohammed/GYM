<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CourseRequest extends FormRequest
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
            "name_en" =>"required|string|max:255",
            "name_ar" =>"required|string|max:255",
            "text_en"=>"required|string" ,
            "text_ar"=>"required|string" ,
            "mentor_en"=>"required|string",
            "mentor_ar"=>"required|string",
            "category"=>"required" ,
            "hours"=>"required|numeric",
            "calories" =>"required|numeric" ,
            "workout_intensity"=>"required|numeric|between:0,99.99" ,
            "day" => "required",
            "time_start" => "required" ,
            "time_end" => "required"
        ];
//         if (in_array($this->method() ,["PUT" ,"PATCH"]))
//         {
//             $course = $this->route()->parameter('course');
//
//             $rules["name_en"]=[
//                 "required",
//                 "string",
//                 "max:255",
//                 Rule::unique('courses')->ignore($course),
//             ];
//             $rules["name_ar"]=[
//                 "required",
//                 "string",
//                 "max:255",
//                 Rule::unique('courses')->ignore($course),
//             ];
//         }
        return $rules ;
    }
}
