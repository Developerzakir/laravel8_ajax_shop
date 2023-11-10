<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\FrontController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontController::class, 'index']);
Route::get('category', [FrontController::class, 'category']);
Route::get('view-category/{slug}', [FrontController::class, 'view_category']);
Route::get('category/{category_slug}/{product_slug}', [FrontController::class, 'product_view']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('add-to-cart', [CartController::class, 'addProduct']);
Route::post('delete-cart-item', [CartController::class, 'deleteItem']);
Route::post('update-cart', [CartController::class, 'updateItem']);


Route::middleware(['auth'])->group(function(){
    Route::get('cart', [CartController::class, 'viewCart']);
    Route::get('checkout', [CheckoutController::class, 'index']);
});

Route::middleware(['auth','isAdmin'])->group(function() {

    // category routes
    Route::get('/dashboard','Admin\FrontController@index');
    Route::get('categories','Admin\CategoryController@index');
    Route::get('add-category','Admin\CategoryController@add');
    Route::post('insert-category','Admin\CategoryController@insert');
    Route::get('edit-category/{id}',[CategoryController::class, 'editCategory']);
    Route::put('update-category/{id}',[CategoryController::class, 'updateCategory']);
    Route::get('delete-category/{id}',[CategoryController::class, 'destroyCategory']);



    //products route
    Route::get('products',[ProductController::class, 'index']);
    Route::get('add-product',[ProductController::class, 'addProduct']);
    Route::post('insert-product',[ProductController::class, 'insertProduct']);
    Route::get('edit-product/{id}',[ProductController::class, 'editProduct']);
    Route::put('update-product/{id}',[ProductController::class, 'updateProduct']);
    Route::get('delete-product/{id}',[ProductController::class, 'destroyProduct']);
 
 });
