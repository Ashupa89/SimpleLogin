<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('login');
});
Route::get('register', function () {
    return view('register');
});
Route::get('dashboard', function () {
    $products = Product::all();
    return view('products.products-list',compact('products'));
});

Route::resource('products',ProductController::class);
Route::post('register_page',[LoginController::class,'register']);
Route::post('login',[LoginController::class,'login']);


