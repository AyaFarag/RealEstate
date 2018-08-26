<?php

namespace App\Http\Controllers;

use App\ContactUs;
use Illuminate\Http\Request;
use App;
use Session;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactus = App\Models\ContactUs::orderBy('id', 'desc')->get();
        return view('admin.contactus.view' ,compact('contactus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contactus.create');
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
            'desc' => 'required',
        ));
        $contactus = new App\Models\ContactUs();
        if (!$contactus) {
            $about = App\Models\about::create([
            'content' => '',
            ]);
        }
        $contactus->content = $request->desc; 
        $contactus->save();
        Session::flash('success','Section added Successfully !!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $contactus = App\Models\ContactUs::get();
        // return view('website.index', compact('contactus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $contactus = App\Models\ContactUs::find($id);
        return view('admin.contactus.edit',compact('contactus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'desc' => 'required',
        ));
        $contactus = App\Models\ContactUs::find($id);
        $contactus->content = $request->desc; 
        $contactus->save();
        Session::flash('success','Section Updated Successfully !!');
        return redirect()->route('contactus.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contactus = App\Models\ContactUs::destroy($id);
        return back();
    }
}
