<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SkillsRequest;
use App\Models\Admin\Skills;
use App\Traits\ImageProcess;
use App\Traits\UpdateTrait;

class SkillsController extends Controller
{
    use UpdateTrait ,ImageProcess ;
   /**
     * Show the form for editing the specified resource.
     *
     * @return view
     */
    public function edit()
    {
         $skill =Skills::first();

         return view('admin.homepage.skills.edit' , compact('skill')) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  SkillsRequest $request
     * @param  Skills  $skill
     * @return back
     */
    public function update(SkillsRequest $request)
    {
        $model = Skills::first();

        $this->updateData($request ,$model);
        return back()->with('success' , 'Skills Updated Successfully') ;
    }

}
