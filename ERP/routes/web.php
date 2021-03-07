<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\inventoryController;
use App\Http\Controllers\productController;



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

Route::get('/',[dashboardController::Class,'dashboard'])->name('dashboard');

Route::get('/dashboard',[dashboardController::Class,'dashboard'])->name('dashboard');
Route::get('/category',[inventoryController::Class,'allCategory'])->name('category');
Route::get('/addcategory',[inventoryController::Class,'addCategory'])->name('addcategory');
Route::post('/storecategory',[inventoryController::Class,'store'])->name('storecategory');
Route::get('/allcategory',[inventoryController::Class,'allCategory']);
Route::get('delete/category/{id}',[inventoryController::Class,'delete']);
Route::get('edit/category/{id}',[inventoryController::Class,'edit']);
Route::post('update/category/{id}',[inventoryController::Class,'update']);

//brand
Route::get('/brand',[inventoryController::Class,'allbrand'])->name('brand');
Route::get('/addbrand',[inventoryController::Class,'addbrand'])->name('addbrand');
Route::post('/storebrand',[inventoryController::Class,'storebrand'])->name('storebrand');
Route::get('/allbrand',[inventoryController::Class,'allbrand']);
Route::get('delete/brand/{id}',[inventoryController::Class,'deleteb']);
Route::get('edit/brand/{id}',[inventoryController::Class,'editb']);
Route::post('update/brand/{id}',[inventoryController::Class,'updateb']);

//products
Route::get('/product',[productController::Class,'allproduct'])->name('product');
Route::get('/addproduct',[productController::Class,'addproduct'])->name('addproduct');
Route::post('/storeproduct',[productController::Class,'storeproduct'])->name('storeproduct');
Route::get('edit/product/{id}',[productController::Class,'editproduct']);








