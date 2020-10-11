<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SliderRequest;
use App\Models\Admin\Slider;
use Illuminate\View\View;
use App\Traits\ImageProcess  ;

class SliderController extends Controller
{
    use ImageProcess;
    /**
     * Show the form for editing the specified resource.
     *
     * @param  Slider  $slider
     * @return view
     */
    public function edit(Slider $slider)
    {
        $slider = Slider::first();
        if($slider === null)
            $slider = new Slider() ;

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
        $slider= Slider::updateOrCreate(
             [
                 "title_en" => $request->title_en ,
                 "title_ar" => $request->title_ar ,
             ]
         );

        if ($request->has('image'))
        {
            $slider->image()->updateOrCreate([
                'image' => $this->upload_image(($request->file('image')))
            ]);

        }
         return back()->with(["success" => "Slider Updated Successfully"]);

    }
}
