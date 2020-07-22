<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class SavedLaterController extends Controller
{

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::instance('saveLater')->remove($id);  
        return redirect()->back()->with('success_message','Item Remove Suceesfully');
    }
        /**
     * Switch to Cart.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function switchToCart( $id)
    {
        $item=Cart::instance('saveLater')->get($id);
        Cart::instance('saveLater')->remove($id);
        // $duplicate=Cart::instance('default')->search(function ($cartItem, $rowId) {
        //     return $cartItem->id === 1;
        // });
        // if($duplicate->isNotEmpty()){
        //     return redirect()->route('cart.index')->with('success_message','Item is already Added to the cart');
        // }

        Cart::instance('default')->add($item->id,$item->name,1,$item->price)
        ->associate('App\Product');
        return redirect()->route('cart.index')->with('success_message','Item is moved to Cart');
    }

}
