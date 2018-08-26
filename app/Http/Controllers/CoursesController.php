<?php

namespace App\Http\Controllers;

use App\Courses;
use Illuminate\Http\Request;
use App;
use Session;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = App\Models\CourseType::get();
        $courseslider = App\Models\CourseSlider::latest()->first();
        if(!$courseslider){
            $courseslider = App\Models\CourseSlider::create([
              'title' => '',
              'description' => '',
              'img' => '',
            ]);
        }
        $courses = App\Models\Courses::orderBy('id','desc')->get();
        return view('admin.courses.view',compact('type','courses','courseslider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = App\Models\CourseType::get();
        return view('admin.courses.create', compact('type'));
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
            'type' => 'required',
            'image' => 'required',
        ));
        $courses = new App\Models\Courses();
        $image = $request->file('image');
        $imgname = time() . '.' . $image->getClientOriginalExtension();
        $location = $image->move(public_path('uploads/courses'), $imgname);
        $courses->image = $imgname;
        $courses->coursetype_id = $request->type;
        $courses->save();
        Session::flash('success','Course added Successfully !!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Courses  $courses
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type = App\Models\CourseType::get();
        $courses = App\Models\Courses::find($id);
        return view('admin.courses.edit', compact('type','courses'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'type' => 'required',
        ));
        $courses = App\Models\Courses::find($id);
        $courses->coursetype_id = $request->type;
        if($request->file('image')){
            $image = $request->file('image');
            $imgname = time() . '.' . $image->getClientOriginalExtension();
            $location = $image->move(public_path('uploads/courses'), $imgname);
            $courses->image = $imgname;
            $courses->save();
        }else{
            $courses->coursetype_id = $request->type;
            $courses->save();
        }
        Session::flash('success','Course Updated Successfully !!');
        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $courses = App\Models\Courses::destroy($id);
        return back();
    }
}
