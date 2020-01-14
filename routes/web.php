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

use App\StoreWebsiteProducts;

Route::get('/', function () {
    // $products = Products::where('Active','Y')
    //                     ->whereNotNull('PathToLogo')
    //                     ->where('UnitPrice','<>','0.00')
    //                     ->get();      
    $productsJSON = StoreWebsiteProducts::where('Active','Y')
                                    ->where('DigitalProduct','Y')
                                    ->where('ProductID','<>','100')
                                    ->where('ProductID','<>','5000')
                                    ->get();
    $products = [];
    foreach($productsJSON as $productJSON)
    {
        $products[] = json_decode($productJSON->WebsiteJSON);
    }
    // dd($products);
    return view('welcome',['products'=>$products]);
});


Route::get('/contact', function () {
    return view('contact');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
