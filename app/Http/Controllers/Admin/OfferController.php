<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OfferRequest;
use App\Models\Admin\Offer;
use App\Traits\ImageProcess;
use App\Traits\UpdateTrait;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    use UpdateTrait,ImageProcess ;
    /**
     * @return  View
     */
    public function edit()
     {
         $offer = Offer::first() ;

         return view('admin.homepage.offer.edit' , compact('offer')) ;

     }
    public function update(OfferRequest $request)
    {
        $model = Offer::first() ;

        $this->updateData($request ,$model);

        return back()->with('success' , 'Offer Updated Successfully') ;
    }
}
