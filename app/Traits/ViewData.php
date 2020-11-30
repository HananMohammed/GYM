<?php


namespace App\Traits;


use App\Models\Admin\About;
use App\Models\Admin\Courses;
use App\Models\Admin\Gallary;
use App\Models\Admin\IconFont;
use App\Models\Admin\Offer;
use App\Models\Admin\Opinion;
use App\Models\Admin\ServicesCategory;
use App\Models\Admin\Skills;
use App\Models\Admin\Slider;
use App\Models\Admin\WhyChooseUs;

class ViewData
{
    /**
     * @return array
     */
    public Static function HomepageData()
    {
        $locale = app()->getLocale() ;

        $opinions = Opinion::select("name_".$locale.' as name' ,
            "role_".$locale.' as role' ,
            "title_".$locale.' as title',
            "text_".$locale.' as text',
            "counter")->get();
//        $courses = Courses::select("id", "name_".$locale." as name" ,)
        $data = [
            "slider" => Slider::all(),
            "gallary" =>Gallary::all(),
            "cards" => WhyChooseUs::all(),
            "skills"=>Skills::first() ,
            "offer" =>Offer::first(),
            'services-category' =>ServicesCategory::all(),
            'opinions'=>$opinions
        ];

        return $data ;
    }

    /**
     * @return array
     */
    public Static function aboutData()
    {
        $data = [
            "about" => About::first(),
            "cards" => WhyChooseUs::all(),
            "gallary" =>Gallary::all(),
        ];

        return $data ;
    }

}
