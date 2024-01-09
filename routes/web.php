<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\admin\SuperAdminController;

use App\Http\Controllers\admin\robot\ControlPanelController;

use App\Http\Controllers\admin\robot\LocationController;

use App\Http\Controllers\admin\restaurent\ManagerController;

use App\Http\Controllers\user\HomeController;

use App\Http\Controllers\user\OrderController;

use App\Http\Controllers\user\OrderListController;

use App\Http\Controllers\restaurent\Itemcontroller;

use App\Http\Controllers\user\OrderConfirmController;

use App\Http\Controllers\restaurent\ProductListController;


use App\Http\Controllers\restaurent\ManagerFunctionController;

use App\Http\Controllers\admin\robot\AdminFunctionController;

use App\Http\Controllers\admin\ChangePasswordController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

///Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');






///Route::resource('/product', ProductController::class);

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');



Route::group(['middleware' => ['auth', 'super_admin']], function() {

Route::resource('/admin_dashboard', SuperAdminController::class);

Route::resource('/control_panel', ControlPanelController::class);

Route::resource('/location',LocationController::class);


Route::resource('/item', ItemController::class);

Route::get('/pending_order', [AdminFunctionController::class, 'index'])->name('pending_order');

Route::get('/admin_order_cancel_list', [AdminFunctionController::class, 'order_cancel']);


Route::get('/admin_order_accept_list', [AdminFunctionController::class, 'accept_list']);
    
Route::get('admin_order_cancel/{id}', [AdminFunctionController::class, 'cancel']);


Route::get('admin_order_accept/{id}', [AdminFunctionController::class, 'accept']);

Route::resource('/change_password',ChangePasswordController::class);

Route::get('/user_list',[AdminFunctionController::class, 'user_list']);


});



Route::group(['middleware' => ['auth', 'manager']], function() {

    Route::get('/manager_dashboard', [App\Http\Controllers\Restaurent\ManagerController::class, 'index'])->name('manager_dashboard');
    
    Route::get('order_foroward/{id}', [App\Http\Controllers\restaurent\ManagerFunctionController::class, 'index']);

    Route::get('order_cancel_list', [App\Http\Controllers\restaurent\ManagerFunctionController::class, 'cancel_order']);

    Route::get('order_cancel/{id}', [App\Http\Controllers\restaurent\ManagerFunctionController::class, 'cancel']);
    
    Route::resource('/manager_order',ProductListController::class);
    
    Route::resource('/item', ItemController::class);
    
    });
    

    Route::group(['middleware' => ['auth', 'user']], function() {

        ////Route::get('/home', [App\Http\Controllers\user\HomeController::class, 'index'])->name('manager_dashboard');
        
        
        Route::resource('/home', HomeController::class);
        

        Route::resource('/order',OrderController::class);

        Route::resource('/order_confirm',OrderConfirmController::class);

       
       
        
        
        });