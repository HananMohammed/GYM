<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ServiceRequest;
use App\Models\Admin\Service;
use App\Models\Admin\ServicesCategory;
use App\Traits\ImageProcess;
use App\Traits\StoreTrait;
use App\Traits\UpdateTrait;

class ServiceController extends Controller
{
    use StoreTrait ,UpdateTrait ,ImageProcess ;

    /**
     * Display a listing of the resource.
     *
     * @return view
     */
    public function index()
    {
         $services = Service::all();

         return view('admin.services.index' ,compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = new Service() ;

        $categories = ServicesCategory::select(['id' , 'title_'.app()->getLocale().' as title'])->get();

        return view('admin.services.create' ,compact('service' ,'categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ServiceRequest $request
     * @return back
     */
    public function store( ServiceRequest $request)
    {

        $model = new Service();

        $this->storeData($request , $model) ;

        return redirect(route('admin.services.index'))->with('success' , 'Service Saved Successfully') ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Service  $service
     * @return view
     */
    public function edit(Service $service)
    {
        $categories = ServicesCategory::select(['id' , 'title_'.app()->getLocale().' as title'])->get();

        return view('admin.services.edit' ,compact('service' ,'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ServiceRequest $request
     * @param  Service  $service
     * @return back
     */
    public function update(ServiceRequest $request, Service $service)
    {
         $this->updateData($request , $service);

        return redirect(route('admin.services.index'))->with('success' , 'Service Saved Successfully') ;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete() ;
        return back()->with('success' , 'Service Deleted Successfully') ;

    }
}
