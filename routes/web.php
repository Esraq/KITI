<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\admin\SuperAdminController;

use App\Http\Controllers\admin\robot\ControlPanelController;

use App\Http\Controllers\admin\robot\LocationController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');



Route::group(['middleware' => ['auth', 'super_admin']], function() {

Route::resource('/admin_dashboard', SuperAdminController::class);

Route::resource('/control_panel', ControlPanelController::class);

Route::resource('/location',LocationController::class);


});