<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id','DESC')->get();
        //$categories=Category::with('children')->where('parent_id','=',NULL);
        // $parentCategory = Category::where('parent_id','=',0)->get();
        // $subcategory = Category::where('parent_id','>','0')->get();
    // $categories = Category::where('parent_id',NULL)->get();
    // $categories = Category::orderBy('id','desc')->get();
    // ->with('all',$all)
    //$categories = Category::with('children')->whereNull('parent_id')->get();

    return view('admin.partials.category.create',compact('categories'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name','desc')->where('parent_id',NULL)->get();
       return view('admin.partials.category.create',compact('categories'));
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
        'name'              =>'required|min:3|unique:categories',
        'image'              =>'nullable|image|mimes:jpg,jpeg,png,gif'
       ]);
    //    $data = $request->except('_token');

    // $categories=new Category;
    // $categories->name=$request->name;
    // $categories->parent_id=$request->parent_id;
        $file_name=NULL;
    if($request->has('image') != NULL){
        $cat_image=$request->file('image');
        $file_name = time().'.'.$cat_image->getClientOriginalExtension();
       $file_path=$cat_image->move('uploads/category/',$file_name);

       Category::create([
            'name'  =>$request->name,
            'parent_id'  =>$request->parent_id,
            'image'  =>$file_name,
       ]);

    }else{
        Category::create([
            'name'  =>$request->name,
            'parent_id'  =>$request->parent_id,
            'image' =>$file_name
       ]);

    }
//$categories->image=$file_path;
    
    //dd($categories);
    // $categories->save();


      
        
       
       return redirect()->back()->withSuccess('You have successfully created a Category!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $category= Category::findOrFail($id);
      if(file_exists('image')){
        

      }
      $category->delete();
       return  redirect()->back();
    }
    // public function subcategory()
    // {
    //     $this->validate($request,[
    //         'name'              =>'required|min:3|unique:categories',
            
    //        ]);
           
    //        Category::create($request->all());
    //        return redirect()->back();
    // }
}
