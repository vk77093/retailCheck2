<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('homePgae');
});
Route::get('/second', function () {
    $title_page= 'Authentic freshness & flavour';
    return view('homePage2',compact('title_page'));
});
// Route::view('/second', 'homePage2');
Route::resource('/retail', 'HandleWeb');
Route::post('/second', 'HandleWeb@storeNew')->name('second.storeNew');
Route::get('/upcomingLaunch', 'HandleWeb@upcoming');
Route::post('/user-feedback', 'UserFeedbackController@getUserFeedback')->name('user-feedback');
Route::get('/user-feedback-form', 'HandleWeb@feedback');

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/admin', 'CustomerDataController');
    Route::get('/productView', 'CustomerDataController@viewProduct');
    Route::resource('/QrData', 'UserFeedbackController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// product description
Route::get('/burgerMayo', 'ProductDes@burger');
Route::get('/butterMayo','ProductDes@butter');
Route::get('/sandwich', 'ProductDes@sandwich');
Route::get('/pizzaPasta', 'ProductDes@pizzaPasta');
Route::get('/pizzaTopping', 'ProductDes@pizzaTopping');
Route::get('/tandoriSandwich', 'ProductDes@tandoriSandwich');
Route::get('/whitePasta', 'ProductDes@whitePasta');

//foodcoast product type
Route::get('mayoRange', 'FoodcoastProduct@allmayo');
Route::get('/mayoRange/realmayo', 'FoodcoastProduct@realmayo');
