<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ClassesCategoriesRequest;
use App\Models\Admin\ClassCategory;
use App\Traits\StoreTrait;
use App\Traits\UpdateTrait;
use Illuminate\Http\Request;

class ClassCategoryController extends Controller
{
    use StoreTrait , UpdateTrait;
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categories = ClassCategory::select('id' ,"name_".app()->getLocale().' as name' ,'created_by')->where('deleted_at',null)->get();

        return view('admin.classes.category.index' , compact('categories'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  ClassesCategoriesRequest  $request
     * @param ClassCategory $model
     * @return  back
     */
    public function store(ClassesCategoriesRequest $request ,ClassCategory $model )
    {
        $this->storeData($request , $model);

        return back()->with('success' , 'Category Stored Successfully') ;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  Request $request
     * @return Response response of type json
     */
    public function edit( Request $request)
    {
        if ($request->ajax())
        {
            $data = ClassCategory::find($request->id) ;

            return response()->json($data);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ClassesCategoriesRequest  $request
     * @param  ClassCategory  $classCategory
     * @return Response
     */
    public function update(ClassesCategoriesRequest $request, ClassCategory $classCategory)
    {
        $this->updateData($request ,$classCategory);

        return back()->with('success' , 'Category Updated Successfully') ;

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\ClassCategory  $classCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClassCategory $classCategory)
    {
        //Soft Delete

        $classCategory->delete();

        return back()->with('success' , 'Category deleted Successfully') ;

    }
}
