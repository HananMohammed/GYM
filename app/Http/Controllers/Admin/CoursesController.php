<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CourseRequest;
use App\Models\Admin\ClassCategory;
use App\Models\Admin\Courses;
use App\Traits\ImageProcess;
use App\Traits\StoreTrait;
use App\Traits\UpdateTrait;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    use StoreTrait , UpdateTrait , ImageProcess ;
    /**
     * Display a listing of the courses.
     *
     * @return Response
     */
    public function index()
    {
        $courses = Courses::all() ;

        return view('admin.classes.courses.index' , compact('courses'));
    }

    /**
     * Show the form for creating a new Course.
     *
     * @return Response
     */
    public function create()
    {
        $course = new Courses() ;

        $categories = ClassCategory::select('id' ,'name_'.app()->getLocale().' as name')->get() ;

        return view('admin.classes.courses.create' , compact('course','categories'));

    }

    /**
     * Store a newly created Course in storage.
     *
     * @param  CourseRequest  $request
     * @param Courses $model
     * @return Response
     */
    public function store(CourseRequest $request ,Courses $model)
    {
        $this->storeData($request, $model);

        return redirect(route('admin.courses.index'))->with('success',"Courses Stored Successfully !!! ");
    }

    /**
     * Show the form for editing the specified Course Data.
     *
     * @param Courses  $course
     * CourseRequest $request
     * @return Response
     */
    public function edit(Courses $course)
    {
        $categories = ClassCategory::select('id' ,'name_'.app()->getLocale().' as name')->get() ;

        return view('admin.classes.courses.edit' , compact('course','categories'));
    }

    /**
     * Update the specified Course in storage.
     *
     * @param  CourseRequest  $request
     * @param  Courses  $course
     * @return Response
     */
    public function update(CourseRequest $request, Courses $course)
    {
        $this->updateData($request, $course);

        return redirect(route('admin.courses.index'))->with('success',"Courses Updated Successfully !!! ");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Courses $courses)
    {
        //
    }
}
