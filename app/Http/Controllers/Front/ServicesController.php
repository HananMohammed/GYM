<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Opinion;
use App\Models\Admin\Service;
use App\Models\Admin\ServicesCategory;

class ServicesController extends Controller
{
     public function services($id)
     {
         $locale = app()->getLocale() ;
         $services = Service::where('category',$id)->get();

         $category = ServicesCategory::select('id','title_'.$locale.' as title' ,
                                      'text_'.$locale.' as text')->find($id);

         $opinions = Opinion::select("name_".$locale.' as name' ,
                                     "role_".$locale.' as role' ,
                                     "title_".$locale.' as title',
                                     "text_".$locale.' as text',
                                      "counter")->get();

         return view('front.services.index' , compact('services','category' ,'opinions')) ;

     }
}
