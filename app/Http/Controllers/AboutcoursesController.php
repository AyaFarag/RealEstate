<?php

namespace App\Http\Controllers;

use App\Models\aboutcourses;
use Illuminate\Http\Request;
use App;
use Session;

class AboutcoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutcourses = App\Models\aboutcourses::orderBy('id','desc')->first();
        if (!$aboutcourses) {
            $aboutcourses = App\Models\aboutcourses::create([
              'title' => '',
              'content' => '',
              'img' => '',
            ]);
          }
        return view('admin.aboutcourses.view', compact('aboutcourses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.aboutcourses.create');
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
            'content' => 'required',
            'image' => 'required',
        ));
        $aboutcourses = new App\Models\aboutcourses();
        $aboutcourses->title = $request->title;
        $aboutcourses->content = $request->content;
        $image = $request->file('image');
        $imagename = time().'.' .$image->getClientOriginalExtension();
        $location = $image->move(public_path('uploads/aboutcourses'), $imagename);
        $aboutcourses->img = $imagename;
        $aboutcourses->save();
        Session::flash('success','Section added Successfully !!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\aboutcourses  $aboutcourses
     * @return \Illuminate\Http\Response
     */
    public function show(aboutcourses $aboutcourses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\aboutcourses  $aboutcourses
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aboutcourses = App\Models\aboutcourses::find($id);
        return view('admin.aboutcourses.edit', compact('aboutcourses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\aboutcourses  $aboutcourses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'title' => 'required',
            'content' => 'required',
            
        ));
            $aboutcourses = App\Models\aboutcourses::find($id);
            $aboutcourses->title = $request->title;
            $aboutcourses->content = $request->content;
        if($request->file('image')){
            $image = $request->file('image');
            $imagename = time().'.' .$image->getClientOriginalExtension();
            $location = $image->move(public_path('uploads/aboutcourses'), $imagename);
            $aboutcourses->img = $imagename;
            $aboutcourses->save();    
        }else{
            $aboutcourses->title = $request->title;
            $aboutcourses->content = $request->content;
            $aboutcourses->save();    
        }

        Session::flash('success','Section Updated Successfully !!');
        return redirect()->route('aboutcourses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\aboutcourses  $aboutcourses
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aboutcourses = App\Models\aboutcourses::destroy($id);
        return back();
    }
}
