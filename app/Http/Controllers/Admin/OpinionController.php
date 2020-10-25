<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OpenionRequest;
use App\Models\Admin\Opinion;
use App\Traits\StoreTrait;
use App\Traits\UpdateTrait;

class OpinionController extends Controller
{
    use StoreTrait , UpdateTrait ;
    /**
     * Display a listing of the resource.
     *
     * @return view
     */
    public function index()
    {
        $locale = app()->getLocale();

        $opinions = Opinion::select('id','created_by',
                                    'name_'.$locale.' as name' ,
                                    'role_'.$locale.' as role' ,
                                    'title_'.$locale.' as title')->get();

        return view('admin.services.opinion.index',compact('opinions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create()
    {
        $opinion = new Opinion();

        return view('admin.services.opinion.create',compact('opinion'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  OpenionRequest $request
     * @return view
     */
    public function store(OpenionRequest $request)
    {
        $model = new Opinion();

         $this->storeData($request , $model);

        return redirect(route('admin.opinions.index'))->with('success' , 'Opinion Stored Successfully');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Opinion  $opinion
     * @return view
     */
    public function edit(Opinion $opinion)
    {

        return view('admin.services.opinion.edit',compact('opinion'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  OpenionRequest  $request
     * @param  Opinion  $opinion
     * @return redirect
     */
    public function update(OpenionRequest $request, Opinion $opinion)
    {
         $this->updateData($request , $opinion);

        return redirect(route('admin.opinions.index'))->with('success' , 'Opinion Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Opinion  $opinion
     * @return back
     */
    public function destroy(Opinion $opinion)
    {
        $opinion->delete();

        return back()->with('success' , 'Opinion Updated Successfully');
    }
}
