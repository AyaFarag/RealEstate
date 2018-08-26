<?php

namespace App\Http\Controllers;

use App\Website;
use Illuminate\Http\Request;
use App;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = App\Models\Slider::orderBy('id','desc')->get();
        $whatwedo = App\Models\WhatWeDo::get();
        $about = App\Models\About::orderBy('id','desc')->first();
            if (!$about) {
                $about = App\Models\about::create([
                  'content' => '',
                  'img' => '',
                ]);
              }
        $aboutcourses = App\Models\aboutcourses::orderBy('id','desc')->first();
            if (!$aboutcourses) {
                $aboutcourses = App\Models\aboutcourses::create([
                  'title' => '',
                  'content' => '',
                  'img' => '',
                ]);
              }
        $service = App\Models\Service::get();
        $team = App\Models\Team::get();
        $contactus = App\Models\ContactUs::orderBy('id','desc')->first();
            if (!$contactus) {
                $about = App\Models\about::create([
                'content' => '',
                ]);
            }
        $branches = App\Models\Branch::all();

        $ourworks = App\Models\OurWork::orderBy('id','desc')->get();
        $courses = App\Models\Courses::get();
        return view('website.index',compact('slider','whatwedo','about','service','team','contactus',
        'branches','ourworks','courses','aboutcourses'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courseslider = App\Models\CourseSlider::latest()->first();
        $courseTypes = App\Models\CourseType::with('courses')->get();
        //$courses = App\Models\Courses::orderBy('id','desc')->groupBy('coursetype_id')->get();
        $branches = App\Models\Branch::all();
        return view('website.courses',compact('courseslider','branches','courseTypes'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function show(Website $website)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function edit(Website $website)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Website $website)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function destroy(Website $website)
    {
        //
    }
}
