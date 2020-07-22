<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Brand;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $brand = Brand::all();
        // //dd($brands);
        // return view('admin.partials.brand.brand',compact('brand'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand=Brand::all();
        return view('admin.partials.brand.brand')->with('brand',$brand);
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
           'name'       =>'required|unique:brands',
           'image'      =>'required | image | mimes:jpg,png,jpeg,gif'
       ]);
       $brands  = new Brand;
       $brands->name        =   $request->input('name');
       $brand_image         =   $request->file('image');
       $new_name            =   time().'.'.$brand_image->getClientOriginalExtension();
       $brand_image->move('uploads/brands',$new_name);
       $brands->image       =   $new_name;
       $brands->save();
       return redirect()->back()->withSuccess('You have successfully created a Brand!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand=Brand::findOrFail($id);
        return view('admin.partials.brand.edit')->with('brand',$brand);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $brand = Brand::findOrFail($id);
        $brand->name        = $request->input('name');

        if($request->hasFile('image')){
           $brand_image=$request->file('image');
            $newName = time().'.'.$brand_image->getClientOriginalExtension();
            $brand_image->move('uploads/brands/',$newName);
            $brand->image = $newName;
        }
       // dd($brand);
        $brand->save();
        return redirect()->route('brand.create')->with('brand',$brand)->withSuccess('You have successfully created a Brand!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brands=Brand::findOrFail($id);

        if(file_exists($brands->image)){
            unlink($brands->image);
        }
        //dd($brand);
        $brands->delete();
        return redirect()->back()->withSuccess('Brand deleted successfully');
    }
}
