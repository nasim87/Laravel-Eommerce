<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use App\Product;
use App\Category;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
// use Stripe\Error\Card;
//use Cartalyst\Stripe\Exception\CardErrorException;
use Cart;

class CheckoutController extends Controller
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
        return view('frontend.pages.checkout')
        ->with('product',$product)
        ->with('categories',Category::all());
      
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
        // \Stripe\Stripe::setApiKey('pk_test_lbat73PZNjYNOGPn7Qnws79Z');

        // // Token is created using Stripe Checkout or Elements!
        // // Get the payment token ID submitted by the form:
        
        //    // $token = $_POST['stripeToken'];
        
        // try {
        //     $charge = Stripe::charge()->create([
        //         'amount' => 999,
        //         'currency' => "USD",
        //         'source' => $request->stripeToken,
        //         'description' => 'Order Description',
        //         'receipt_email' => "admin@email.com",
        //     ]);
        //     return redirect()->route('index');
        // } catch (Exception $e) {
        // }
        
       
      //dd($request->all());
       
        
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
}
