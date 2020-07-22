<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/cache-clear',function(){
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
/**
 * Start of Frontend Route 
 */
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index', 'IndexController@index');
Route::get('/product/{id}', 'IndexController@singleProduct')->name('product.single');
//Route::post('cart/add','ShoppingController@add_to_cart')->name('cart.add');
Route::resource('/cart','CartController');
Route::post('cart/saveForLater/{id}','CartController@saveForLater')->name('cart.saveForLater');

Route::delete('/saveLater/{id}','SavedLaterController@destroy')->name('saveLater.destroy');
Route::post('saveLater/saveForLater/{id}','SavedLaterController@switchToCart')->name('saveLater.switchToCart');

Route::get('/checkout','CheckoutController@index')->name('checkout.index');
Route::delete('/checkout/{id}','CheckoutController@destroy')->name('checkout.destroy');
Route::post('/checkout','CheckoutController@store')->name('checkout.store');

Route::get('/shop','ShopController@index')->name('shop.index');
Route::get('/product/{id}','ShopController@show')->name('product.single');


Route::get('empty', function () {
    Cart::instance('saveLater')->destroy();
});
/**
 * End of Frontend Route 
 */
Route::prefix('admin')->group(function(){
   
    Route::get('/dashboard','AdminController@dashboard')->name('dashboard');
    Route::resource('/product', 'ProductController');
    Route::get('/product/sold', 'ProductController@soldProducts')->name('product.sold');
    Route::resource('/category', 'CategoryController');
    Route::post('/category/subcat', 'CategoryController@subcategory')->name('category.subcategory');
    Route::resource('/brand', 'BrandController');
    Route::resource('/order', 'OrderController');
    Route::resource('/purchase', 'PurchaseController');
    Route::get('order/con', 'OrderController@confirm')->name('order.confirm');
    Route::get('order/pen', 'OrderController@pending')->name('order.pending');
    Route::resource('/slider', 'SliderController');
    Route::resource('/banner', 'BannerController');
});
//============Admin controller route=========..//
//Route::get('/dashboard', 'AdminController@dashboard');
// Route::prefix('admin')->group(function(){
//     Route::get('/dashboard','AdminController@dashboard')->name('dashboard');
// });
//===============Product Route===========//
