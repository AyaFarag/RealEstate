<?php

namespace App\Http\Controllers;

use App\OurWork;
use Illuminate\Http\Request;
use App;
use Session;

class OurWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $field = App\Models\Field::get();
        $ourwork = App\Models\OurWork::orderBy('id','desc')->get();
        return view('admin.ourwork.view', compact('ourwork','field'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $field = App\Models\Field::get();
        return view('admin.ourwork.create', compact('field'));
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
            'image' => 'required',
            'field' => 'required',
        ));
        $ourwork = new App\Models\OurWork();
        $image = $request->file('image');
        $imgname = time() . '.' . $image->getClientOriginalExtension();
        $location = $image->move(public_path('uploads/ourworks'), $imgname);
        $ourwork->img = $imgname;
        $ourwork->field_id = $request->field;
        $ourwork->save();
        Session::flash('success','Section added Successfully !!');
        return back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OurWork  $ourWork
     * @return \Illuminate\Http\Response
     */
    public function show(OurWork $ourWork)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OurWork  $ourWork
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $field = App\Models\Field::get();
        $ourwork = App\Models\OurWork::find($id);
        return view('admin.ourwork.edit', compact('field','ourwork'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OurWork  $ourWork
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'field' => 'required',
        ));
        $ourwork = App\Models\OurWork::find($id);
        $ourwork->field_id = $request->field;
        if($request->file('image')){
            $image = $request->file('image');
            $imgname = time() . '.' . $image->getClientOriginalExtension();
            $location = $image->move(public_path('uploads/ourworks'), $imgname);
            $ourwork->img = $imgname;
            $ourwork->save();
        }
        else{
            $ourwork->field_id = $request->field;
            $ourwork->save();
        }
        Session::flash('success','Section Updated Successfully !!');
        return redirect()->route('ourwork.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OurWork  $ourWork
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ourwork = App\Models\OurWork::destroy($id);
        return back();
    }
}
