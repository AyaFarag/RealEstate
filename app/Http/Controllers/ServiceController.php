<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use App;
use Session;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = App\Models\Service::get();
        return view('admin.services.view', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'title' => 'required',
            'desc' => 'required',
            'image' => 'required',
        ));
        $service = new App\Models\Service();
        $service->title = $request->title;
        $service->describtion = $request->desc;
        $image = $request->file('image');
        $imagename = time().'.' .$image->getClientOriginalExtension();
        $location = $image->move(public_path('uploads/service'), $imagename);
        $service->img = $imagename;
        $service->save();
        Session::flash('success','Section added Successfully !!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = App\Models\Service::find($id);
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'title' => 'required',
            'desc' => 'required',
            
        ));
        $service = App\Models\Service::find($id);
        $service->title = $request->title;
        $service->describtion = $request->desc;
        if($request->file('image')){
            $image = $request->file('image');
            $imagename = time().'.' .$image->getClientOriginalExtension();
            $location = $image->move(public_path('uploads/service'), $imagename);
            $service->img = $imagename;
            $service->save();    
        }else{
            $service->title = $request->title;
            $service->describtion = $request->desc;
            $service->save();    
        }

        Session::flash('success','Section Updated Successfully !!');
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = App\Models\Service::destroy($id);
        return back();
    }
}
