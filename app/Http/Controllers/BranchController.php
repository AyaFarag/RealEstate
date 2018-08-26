<?php

namespace App\Http\Controllers;

use App\Branch;
use Illuminate\Http\Request;
use App;
use Session;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phone = App\Models\Phone::get();
        $branch = App\Models\Branch::get();
        return view('admin.branches.view',compact('branch','phone'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.branches.create');
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
            'email' => 'required',
            'address' => 'required',
        ));
        $branch = new App\Models\Branch();
        $branch->name = $request->name;
        $branch->email = $request->email;
        $branch->address = $request->address;
        $branch->save();
        
        $phone = new App\Models\Phone();
        $phone->number = $request->number;
        $phone->branch_id = $branch->id;
        $phone->save();
        Session::flash('success','Branch added Successfully !!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Branch $branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $phone = App\Models\Phone::find($id);
        $branch = App\Models\Branch::find($id);
        return view('admin.branches.edit',compact('branch','phone'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
        ));
        $branch = App\Models\Branch::find($id);
        $branch->name = $request->name;
        $branch->email = $request->email;
        $branch->address = $request->address;
        $branch->save();
        $phone = App\Models\Phone::find($id);
        $phone->number = $request->number;
        $phone->branch_id = $branch->id;
        $phone->save();
        Session::flash('success','Branch Updated Successfully !!');
        return redirect()->route('branches.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $branch = App\Models\Branch::destroy($id);
        return back();
    }
}
