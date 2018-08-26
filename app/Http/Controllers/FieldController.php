<?php

namespace App\Http\Controllers;

use App\Field;
use Illuminate\Http\Request;
use App;
use Session;

class FieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $field = App\Models\Field::get();
        return view('admin.fields.view', compact('field'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fields.create');
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
            'name' => 'required',
        ));
        $field = new App\Models\Field();
        $field->name = $request->name;
        $field->save();
        Session::flash('success','Field added Successfully !!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function show(Field $field)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $field = App\Models\Field::find($id);
        return view('admin.fields.edit', compact('field'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'name' => 'required',
        ));
        
        $field = App\Models\Field::find($id);
        $field->name = $request->name;
        $field->save();
        Session::flash('success','Field Updated Successfully !!');
        return redirect()->route('fields.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $field = App\Models\Field::destroy($id);
        return back();
    }
}
