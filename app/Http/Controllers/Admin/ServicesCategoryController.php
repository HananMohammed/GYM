<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ServicesCategoryRequest;
use App\Models\Admin\IconFont;
use App\Models\Admin\ServicesCategory;
use App\Traits\ImageProcess;
use App\Traits\StoreTrait;
use App\Traits\UpdateTrait;
use Illuminate\Http\Request;

class ServicesCategoryController extends Controller
{
    use StoreTrait ,UpdateTrait ,ImageProcess ;
    /**
     * Display a listing of the resource.
     *
     * @return view
     */
    public function index()
    {
        $categories = ServicesCategory::all();

        return view('admin.services.category.index' ,compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create()
    {
        $icons = IconFont::all() ;

        $category = new ServicesCategory() ;

        return view('admin.services.category.create' ,compact('icons' , 'category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ServicesCategoryRequest $request
     * @return back
     */
    public function store(ServicesCategoryRequest $request)
    {
        $model = new ServicesCategory();

        $this->storeData($request , $model);

        return redirect(route('admin.services-category.index'))->with('success' , 'Category Added Successfully') ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return view
     */
    public function edit($id)
    {
         $category = ServicesCategory::find($id) ;

         $icons = IconFont::all() ;

        return view('admin.services.category.edit' ,compact('icons' , 'category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ServicesCategoryRequest $request
     * @param  int  $id
     * @return back
     */
    public function update(ServicesCategoryRequest $request, $id)
    {
        $model = ServicesCategory::find($id) ;

        $this->updateData($request , $model);

        return redirect(route('admin.services-category.index'))->with('success' , 'Category Updated Successfully') ;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = ServicesCategory::find($id) ;

        $category->delete();

        return redirect(route('admin.services-category.index'))->with('success' , 'Category deleted Successfully') ;

    }
}
