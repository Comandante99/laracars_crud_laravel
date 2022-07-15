<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('cars', App\Http\Controllers\CarController::class);
//index.blade.php, create.blade.php, dostry

Route::resource('orders', App\Http\Controllers\OrderController::class);
Route::resource('manufacturers', App\Http\Controllers\ManufacturerController::class);


// Route::group(['prefix'=>'paypal'], function(){
//     Route::post('/order/create',[\App\Http\Controllers\Front\PaypalPaymentController::class,'create']);
//     Route::post('/order/capture/',[\App\Http\Controllers\Front\PaypalPaymentController::class,'capture']);
// });