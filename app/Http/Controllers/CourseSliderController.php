<?php

namespace App\Http\Controllers;

use App\CourseSlider;
use Illuminate\Http\Request;
use App;
use Session;

class CourseSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = App\Models\CourseSlider::get();
        return view('admin.courseslider.view',compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.courseslider.create');
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
        $slider = new App\Models\CourseSlider();
        $slider->title = $request->title;
        $slider->description = $request->desc;
        $image = $request->file('image');
        $imgname = time() . '.' . $image->getClientOriginalExtension();
        $location = $image->move(public_path('uploads/slider'), $imgname);
        $slider->img = $imgname;
        $slider->save();
        Session::flash('success','Slider added Successfully !!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CourseSlider  $courseSlider
     * @return \Illuminate\Http\Response
     */
    public function show(CourseSlider $courseSlider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CourseSlider  $courseSlider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = App\Models\CourseSlider::find($id);
        return view('admin.courseslider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CourseSlider  $courseSlider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'title' => 'required',
            'desc' => 'required',
        ));
        $slider = App\Models\CourseSlider::find($id);
        $slider->title = $request->title;
        $slider->description = $request->desc;
        if($request->file('image')){
            $image = $request->file('image');
            $imgname = time() . '.' . $image->getClientOriginalExtension();
            $location = $image->move(public_path('uploads/slider'), $imgname);
            $slider->img = $imgname;
            $slider->save();
        }else{
            $slider->title = $request->title;
            $slider->description = $request->desc;
            $slider->save();
        }
        Session::flash('success','Slider Updated Successfully !!');
        return redirect()->route('courseslider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CourseSlider  $courseSlider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = App\Models\CourseSlider::destroy($id);
        return back();
    }
}
