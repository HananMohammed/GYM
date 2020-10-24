<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Service;
use App\Models\Admin\ServicesCategory;

class ServicesController extends Controller
{
     public function services($id)
     {
         $services = Service::where('category',$id)->get();

         $category = ServicesCategory::select('id','title_'.app()->getLocale().' as title' ,
                                      'text_'.app()->getLocale().' as text')->find($id);

         return view('front.services.index' , compact('services','category')) ;

     }
}
