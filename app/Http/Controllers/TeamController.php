<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use App;
use Session;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = App\Models\Team::get();
        return view('admin.team.view', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
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
            'jobtitle' => 'required',
            'image' => 'required',
        ));
        $team = new App\Models\Team();
        $team->name = $request->name;
        $team->jobTitle = $request->jobtitle;
        $image = $request->file('image');
        $imagename = time().'.' .$image->getClientOriginalExtension();
        $location = $image->move(public_path('uploads/team'), $imagename);
        $team->img = $imagename;
        $team->save();
        Session::flash('success','Member added Successfully !!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = App\Models\Team::find($id);
        return view('admin.team.edit', compact('team'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, array(
            'name' => 'required',
            'jobtitle' => 'required',
        ));

        $team = App\Models\Team::find($id);
        $team->name = $request->name;
        $team->jobTitle = $request->jobtitle;
        if($request->file('image')){
            $image = $request->file('image');
            $imagename = time().'.' .$image->getClientOriginalExtension();
            $location = $image->move(public_path('uploads/team'), $imagename);
            $team->img = $imagename;
            $team->save();
        }else{
            $team->name = $request->name;
            $team->jobTitle = $request->jobtitle;
            $team->save();
        }
        Session::flash('success','Member Updated Successfully !!');
        return redirect()->route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = App\Models\Team::destroy($id);
        return back();
    }
}
