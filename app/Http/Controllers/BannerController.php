<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
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
        $banners=Banner::all();
       return view('admin.partials.banner.create')->with('banners',$banners);
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
            'name'              =>'required|unique:banners',
            'image'             =>'required | image | mimes:jpg,png,jpeg,gif',
            'offer'             =>'nullable',
            'button_title'      =>'nullable'
        ]);
       $banner  = new Banner;
       $banner->name                =   $request->input('name');
       $banner->button_title        =   $request->input('button_title');
       $banner->offer               =   $request->input('offer');
       $banner_image                =   $request->file('image');
       $new_name                    =   time().'.'.$banner_image->getClientOriginalExtension();
       $banner_image->move('uploads/banner',$new_name);
       $banner->image       =   $new_name;
       $banner->save();
       return redirect()->back()->withSuccess('You have successfully created a Brand!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $banner = Banner::findOrFail($id);
        if(file_exists($banner->image)){
            unlink($banner->image);
        }
        $banner->delete();
        return redirect()->back()->withSuccess('Brand deleted successfully');
    }
}
