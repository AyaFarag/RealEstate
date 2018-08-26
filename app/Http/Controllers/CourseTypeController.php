<?php

namespace App\Http\Controllers;

use App\CourseType;
use Illuminate\Http\Request;
use App;
use Session;

class CourseTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = App\Models\CourseType::orderBy('id','desc')->get();
        return view('admin.types.view', compact('type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.types.create');
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
            'typename' => 'required',
        ));
        $type = new App\Models\CourseType();
        $type->name = $request->typename;
        $type->save();
        Session::flash('success','Type added Successfully !!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CourseType  $courseType
     * @return \Illuminate\Http\Response
     */
    public function show(CourseType $courseType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CourseType  $courseType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type = App\Models\CourseType::find($id);
        return view('admin.types.edit',compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CourseType  $courseType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'typename' => 'required',
        ));
        $type = App\Models\CourseType::find($id);
        $type->name = $request->typename;
        $type->save();
        Session::flash('success','Type Updated Successfully !!');
        return redirect()->route('type.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CourseType  $courseType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = App\Models\CourseType::destroy($id);
        return back();
    }
}
