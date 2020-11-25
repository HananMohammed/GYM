<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ClassFeatureRequest;
use App\Models\Admin\ClassCategory;
use App\Models\Admin\ClassFeature;
use App\Models\Admin\Courses;
use App\Traits\StoreTrait;
use App\Traits\UpdateTrait;
use Illuminate\Http\Request;

class ClassFeatureController extends Controller
{
    use StoreTrait, UpdateTrait;
    /**
     * Display a listing of the Feature.
     *
     * @return view index page
     */
    public function index()
    {
        $features = ClassFeature::all();

        $categories = ClassCategory::select("id", "name_".app()->getLocale().' as name')->get();

        return view('admin.classes.feature.index'  , compact('features' ,'categories'));
    }

    /**
     * Ajax Call To Select Courses By Category Id.
     *
     * @return response json of courses
     */
    public function create(Request $request)
    {
        if ($request->ajax())
        {
            $courses = Courses::where("category" ,$request->id)
                                ->select("id", "name_".app()->getLocale()." as name")
                                ->get();

            return response()->json($courses);
        }

    }

    /**
     * Store a newly created Feature in storage.
     *
     * @param ClassFeatureRequest  $request
     * @param ClassFeature $model
     * @return Response with success msg
     */
    public function store(ClassFeatureRequest $request, ClassFeature $model)
    {
        $this->storeData($request, $model);

        return back()->with("success" , "Feature Stored Successfully") ;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\ClassFeature  $classFeature
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
         if ($request->ajax())
         {
              $feature = ClassFeature::find($request->id);

              $category_name = $feature->category()->pluck('name_'.app()->getLocale())[0];

              $course_name = $feature->courses()->pluck('name_'.app()->getLocale())[0];

              $data = $feature->select("students","duration","shift","price")->where("id",$request->id)->get();

              return response()->json(["category"=>$category_name, "course"=>$course_name, "data"=>$data]);
         }
    }

    /**
     * Update the specified Features in storage.
     *
     * @param  ClassFeatureRequest  $request
     * @param  ClassFeature  $feature
     * @return back with success msg
     */
    public function update(ClassFeatureRequest $request, ClassFeature $feature)
    {
        $this->updateData($request,$feature);

        return back()->with("success" , "Feature Updated Successfully") ;
    }

    /**
     * Remove the specified Feature from storage.
     *
     * @param ClassFeature  $feature
     * @return back with success msg
     */
    public function destroy(ClassFeature $feature)
    {
        $feature->delete();

        return back()->with("success" , "Feature Deleted Successfully") ;
    }
}
