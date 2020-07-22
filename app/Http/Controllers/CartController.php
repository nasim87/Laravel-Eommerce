<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
//use Gloudemans\Shoppingcart\Facades\Cart;

use Cart;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::all();
        $categories=Category::all();
        return view('frontend.pages.cart')
        ->with('product',$product)
        ->with('categories',Category::all());
        // return view('frontend.pages.cart')->with([
        //     'newSubtotal' => getNumbers()->get('newSubtotal'),
        //     'newTotal' => getNumbers()->get('newTotal'),
        //     'categories'=>$categories,
        //     'product'=>$product,
        // ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $pdt = Product::find($request->id);
        // $price = Cart::total(0);
        // Cart::add($request->id,$request->name, 1, $price )
        // ->associate('App\Product');

        // $duplicate = Cart::search(function ($cartItem, $rowId) {
        //     return $cartItem->id === $request->id;
        // });

        // if($duplicate->isNotEmpty()){
        //     return redirect()->route('cart.index')->with('success_message','Item is already Added to the cart');
        // }


        Cart::add($request->id, $request->name, 1, $request->price)
            ->associate('App\Product');
      
        return redirect()->route('cart.index')->with('success_message','Product is added to your cart');
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
        Cart::remove($id);  
        return redirect()->back()->with('success_message','Item Remove Suceesfully');
    }
    
    public function saveForLater($id)
    {
        $item=Cart::get($id);
        Cart::remove($id);


        Cart::instance('saveLater')->add($item->id, $item->name, 1, $item->price)
                ->associate('App\Product');
        
            return redirect()->route('cart.index')->with('success_message','Product is saved for later');
    }
}
