<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GallaryRequest;
use App\Models\Admin\Gallary;
use App\Traits\ImageProcess;
use App\Traits\StoreTrait;
use Illuminate\Http\Request;

class GallaryController extends Controller
{
    use StoreTrait , ImageProcess ;

    /**
     * Display a listing of the resource.
     *
     * @return view
     */
    public function index()
    {
        $gallaries = Gallary::all();

        return view('admin.homepage.gallary.index' ,compact('gallaries')) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  GallaryRequest $request
     * @return back
     */
    public function store(GallaryRequest $request)
    {
         $model = new Gallary() ;

         $this->storeData($request , $model);

         return back()->with('success' , 'Image Added Successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param Gallary $gallary
     * @return back
     */
    public function destroy(Gallary $gallary)
    {
        $this->deleteImage($gallary) ;

        return back()->with('success' , 'Image deleted Successfully');

    }
}
