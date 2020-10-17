<?php


namespace App\Traits;


use App\Models\Admin\About;
use App\Models\Admin\Slider;

class ViewData
{
    /**
     * @return array
     */
    public Static function HomepageData()
    {
        $data = [
            "slider" => Slider::all(),
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
        ];

        return $data ;
    }
}
