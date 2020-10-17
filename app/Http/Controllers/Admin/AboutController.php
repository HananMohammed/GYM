<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutRequest;
use App\Models\Admin\About;
use App\Traits\UpdateTrait;

class AboutController extends Controller
{
    use UpdateTrait ;
    /**
     * Show the form for editing the specified resource.
     *
     * @return Response
     */
    public function edit()
    {
        $about = About::first() ;

        if ($about === null)
            $about = new About();

        return view('admin.about.edit' , compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AboutRequest $request
     * @return Response
     */
    public function update(AboutRequest $request)
    {
         $model = About::first();

         $this->updateData($request , $model);

        return back()->with(["success" => "About Us Updated Successfully"]);

    }
}
