<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use App;
use Session;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = App\Models\About::orderBy('id','desc')->first();
        return view('admin.about.view', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
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
            'content' => 'required',
            'image' => 'required',
        ));
        $about = new App\Models\About();
        if (!$about) {
            $about = App\Models\about::create([
              'content' => '',
              'img' => '',
            ]);
          }
        $about->content = $request->content;
        $image = $request->file('image');
        $imgname = time() . '.' . $image->getClientOriginalExtension();
        $location = $image->move(public_path('uploads/about'), $imgname);
        $about->img = $imgname;
        $about->save();
        Session::flash('success','Section added Successfully !!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = App\Models\About::find($id);
        return view('admin.about.edit' ,compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'content' => 'required',
        ));

        $about = App\Models\About::find($id);
        $about->content = $request->content;
        if($request->file('image')){

            $image = $request->file('image');
            $imgname = time() . '.' . $image->getClientOriginalExtension();
            $location = $image->move(public_path('uploads/about'), $imgname);
            $about->img = $imgname;
            $about->save();
        }
        else{
            $about->content = $request->content;
            $about->save();
        }
        Session::flash('success','Section Updated Successfully !!');
        return redirect()->route('about.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = App\Models\About::destroy($id);
        return back();
    }
}
