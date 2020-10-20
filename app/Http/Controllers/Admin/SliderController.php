<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SliderRequest;
use App\Models\Admin\Slider;
use App\Traits\UpdateTrait;
use Illuminate\View\View;
use App\Traits\ImageProcess  ;

class SliderController extends Controller
{
    use UpdateTrait,ImageProcess;
    /**
     * Show the form for editing the specified resource.
     *
     * @return view
     */
    public function edit()
    {
        $slider = Slider::first();

        return view('admin.homepage.slider.edit' , compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  SliderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function update(SliderRequest $request)
    {
         $model= Slider::first();

         $this->updateData($request ,$model);

         return back()->with(["success" => "Slider Updated Successfully"]);

    }
}
