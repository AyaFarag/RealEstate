<?php

namespace App\Http\Controllers;

use App\WhatWeDo;
use Illuminate\Http\Request;
use App;
use Session;

class WhatWeDoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $whatwedo = App\Models\WhatWeDo::orderBy('id','desc')->get();
        return view('admin.whatwedo.view', compact('whatwedo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.whatwedo.create');
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
        $whatwedo = new App\Models\WhatWeDo();
        
        $whatwedo->title = $request->title; 
        $whatwedo->describtion = $request->desc; 
        $image = $request->file('image');
        $imgname = time() . '.' . $image->getClientOriginalExtension();
        $location = $image->move(public_path('uploads/whatwedo'), $imgname);
        $whatwedo->img = $imgname;
        $whatwedo->save();
        Session::flash('success','Section added Successfully !!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WhatWeDo  $whatWeDo
     * @return \Illuminate\Http\Response
     */
    public function show(WhatWeDo $whatWeDo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WhatWeDo  $whatWeDo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $whatwedo = App\Models\WhatWeDo::find($id);
        return view('admin.whatwedo.edit', compact('whatwedo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WhatWeDo  $whatWeDo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'title' => 'required',
            'desc' => 'required',
           
        ));

        $whatwedo = App\Models\WhatWeDo::find($id);
        $whatwedo->title = $request->title; 
        $whatwedo->describtion = $request->desc;
        if($request->file('image')){
            $image = $request->file('image');
            $imgname = time() . '.' . $image->getClientOriginalExtension();
            $location = $image->move(public_path('uploads/whatwedo'), $imgname);
            $whatwedo->img = $imgname;
            $whatwedo->save();
        } 
        else{
            $whatwedo->title = $request->title; 
            $whatwedo->describtion = $request->desc;
            $whatwedo->save();
        }
        Session::flash('success','Section Updated Successfully !!');
        return redirect()->route('whatWeDo.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WhatWeDo  $whatWeDo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $whatwedo = App\Models\WhatWeDo::destroy($id);
        return back();
    }
}
