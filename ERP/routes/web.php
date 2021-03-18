<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\inventoryController;
use App\Http\Controllers\productController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\HrController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SupplyChainManagerController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\OrderController;



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

//Staff
Route::get('Staff/create',[StaffController::class, 'create'])->name('Staff.create');
Route::post('Staff/create',[StaffController::class, 'store']);
Route::get('Staff/list', [StaffController::class, 'show'])->name('Staff.list');
Route::get('Staff/edit/{user_id}', [StaffController::class, 'edit'])->name('Staff.edit');
Route::post('Staff/edit/{user_id}', [StaffController::class, 'update']);
Route::get('Staff/delete/{user_id}', [StaffController::class, 'delete'])->name('Staff.delete');
Route::post('Staff/delete/{user_id}', [StaffController::class, 'destroy']);
Route::get('Staff/promotion/{user_id}', [StaffController::class, 'promotion'])->name('Staff.promotion');
Route::post('Staff/promotion/{user_id}', [StaffController::class, 'storePromotion']);
Route::get('Staff/bonus/{user_id}', [StaffController::class, 'bonus'])->name('Staff.bonus');
Route::post('Staff/bonus/{user_id}', [StaffController::class, 'storeBonus']);


//HR
Route::get('HR/dashboard', [HrController::class, 'index'])->name('HR.dashboard');
Route::get('HR/profile', [HrController::class, 'profile']);
Route::get('HR/chat', [HrController::class, 'chat']);
Route::get('HR/change_password', [HrController::class, 'changePassword'])->name('HR.changePassword');
Route::post('HR/change_password', [HrController::class, 'storeChangePassword']);

//Supply chain manager
Route::get('supply_chain_manager/dashboard', [SupplyChainManagerController::class, 'index'])->name('SupplyChainManager.dashboard');
Route::get('supply_chain_manager/profile', [SupplyChainManagerController::class, 'profile'])->name('SupplyChainManager.profile');
Route::get('supply_chain_manager/change_password', [SupplyChainManagerController::class, 'changePassword'])->name('SupplyChainManager.changePassword');
Route::post('supply_chain_manager/change_password', [SupplyChainManagerController::class, 'storeChangePassword']);

//production
Route::get('supply_chain_manager/all_production', [SupplyChainManagerController::class, 'production'])->name('SupplyChainManager.production');
Route::get('supply_chain_manager/all_ready_production', [SupplyChainManagerController::class, 'readyProduction'])->name('SupplyChainManager.ready');
Route::get('supply_chain_manager/edit_production/{product_id}', [SupplyChainManagerController::class, 'edit'])->name('SupplyChainManager.edit');
Route::post('supply_chain_manager/edit_production/{product_id}', [SupplyChainManagerController::class, 'editProduction']);
Route::get('supply_chain_manager/all_upcoming_production', [SupplyChainManagerController::class, 'upcomingProduction'])->name('SupplyChainManager.upcoming');

//order
Route::get('supply_chain_manager/all_order', [OrderController::class, 'index'])->name('SupplyChainManager.order');
Route::get('supply_chain_manager/cancelled_order', [OrderController::class, 'cancelled'])->name('SupplyChainManager.cancelledOrder');
Route::get('supply_chain_manager/complete_order', [OrderController::class, 'complete'])->name('SupplyChainManager.completeOrder');
Route::get('supply_chain_manager/running_order', [OrderController::class, 'running'])->name('SupplyChainManager.runningOrder');
Route::get('supply_chain_manager/running_order/edit/{order_id}', [OrderController::class, 'editOrder'])->name('SupplyChainManager.editOrder');
Route::post('supply_chain_manager/running_order/edit/{order_id}', [OrderController::class, 'storeOrder']);

//Login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'verify']);

//Logout
Route::get('/logout', [LogoutController::class, 'index']);



