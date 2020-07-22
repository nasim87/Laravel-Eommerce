<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Brand;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        // $categories=Category::all();
       // dd($products);
        return view('admin.partials.product.products',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $categories = Category::all();
        // $categories = Category::where('parent_id','=',0)->get();
        // $subcategories=Category::where('parent_id','=',1)->get();
        $brands = Brand::all();
       return view('admin.partials.product.create',compact('categories','brands'));

       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request)
    {
        $this->validate($request,[
            'brand_id'          =>'required',
            'category_id'       =>'required',
            'name'              =>'required|unique:products|max:255',
            'quantity'          =>'required',
            'code'              =>'required',
            'model'             =>'required',
            'description'       =>'required',
            'specification'     =>'required',
            'r_price'           =>'required',
            'price'             =>'required',
            'images'            =>'required',
            //'color'             =>'required'
        ]);
        $products = new Product;
        $products->name                 = $request->input('name');  
        $products->quantity             = $request->input('quantity');
        $products->code                 = $request->input('code');
        $products->model                = $request->input('model');
        $products->description          = $request->input('description');
        $products->specification        = $request->input('specification');
        $products->r_price              = $request->input('r_price');
        $products->price                = $request->input('price');
        $products->brand_id             = $request->input('brand_id');
        $products->category_id          = $request->input('category_id');
        $colors                         = $request->input('color');
        $color_arr=[];
        foreach ($colors as $color) {
            $color_arr[] = $color;
        }
        $products['color']                  = implode('|', $color_arr);

        $image_arr=[];
        if($new_images= $request->file('images')){
            $new_images               =$request->file('images');
                foreach ($new_images as $file) {
                    $new_name = time().'.'.$file->getClientOriginalName();
                    $file->move('uploads/products',$new_name);
                    $image_arr[] = $new_name;
                }
                
            }
            

            $products['images']       = implode('|',$image_arr);
            //$image_arr['images '] = implode(',',$new_name);
        //   dd($products);
          //Product::create($request->all());
            $products->save();
            return redirect()->route('product.index')->withSuccess('Data has been inserted successfully!');

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
        $products=Product::findOrFail($id);
        $categories = Category::where('parent_id','=',0)->get();
        $subcategories=Category::where('parent_id','=',1)->get();
        $brands = Brand::all();

        return view('admin.partials.product.edit',compact('products','categories','brands','subcategories'));
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
        $this->validate($request,[
            'brand_id'          =>'required',
            'category_id'       =>'required',
            'name'              =>'required|unique:products|max:255',
            'quantity'          =>'required',
            'code'              =>'required',
            'model'             =>'required',
            'description'       =>'required',
            'specification'     =>'required',
            'r_price'           =>'required',
            'price'             =>'required',
            'images'            =>'required',
            //'color'             =>'required'
        ]);
        $products = Product::findOrfail($id);
        $products->name                 = $request->input('name');  
        $products->quantity             = $request->input('quantity');
        $products->code                 = $request->input('code');
        $products->model                = $request->input('model');
        $products->description          = $request->input('description');
        $products->specification        = $request->input('specification');
        $products->r_price              = $request->input('r_price');
        $products->price                = $request->input('price');
        $products->brand_id             = $request->input('brand_id');
        $products->category_id          = $request->input('category_id');
        $colors                         = $request->input('color');
        $color_arr=[];
        foreach ($colors as $color) {
            $color_arr[] = $color;
        }
        $products['color']                  = implode('|', $color_arr);

        $image_arr=[];
        if($new_images= $request->file('images')){
            $new_images               =$request->file('images');
                foreach ($new_images as $file) {
                    $new_name = time().'.'.$file->getClientOriginalName();
                    $file->move('uploads/products/',$new_name);
                    $image_arr[] = $new_name;
                }
                
            }
           

            $products['images']       = implode(',',$image_arr);
            //$image_arr['images '] = implode(',',$new_name);
          // dd($products);
            $products->save();
        return redirect('admin.partials.product.product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::findOrFail($id);

        if(file_exists($product->images)){
            unlink($product->images);
        }

        $product->delete();
        return redirect()->back();
    }
    public function soldProducts(){
        return view('admin.partials.product.sold');
    }
}
