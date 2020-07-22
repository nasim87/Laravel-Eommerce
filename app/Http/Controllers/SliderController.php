<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $slider = Slider::all();
        return view('admin.partials.slider.slider')->with('slider',$slider);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'               =>'required|unique:sliders',
            'button_title'       =>'required',
            'image'              =>'required | image | mimes:jpg,png,jpeg,gif'
        ]);
        $slider  = new Slider;
        $slider->name          =   $request->input('name');
        $slider->button_title  =   $request->input('button_title');
        $slider_image          =   $request->file('image');
        $new_name              =   time().'.'.$slider_image->getClientOriginalExtension();
        $slider_image->move('uploads/slider',$new_name);
        $slider->image          =   $new_name;
       // dd($slider);
        $slider->save();
        return redirect()->back()->withSuccess('You have successfully created a Brand!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        //
    }
}
