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


// Route::get('/', function () {
//     return view('login');
// });


// Auth::routes();

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', function(){
    session()->flush();
    return redirect('login');
  });
  
Route::get('/', function(){
    return redirect()->route('home');
});
Route::get('home', 'HomeController@index')->name('home')->middleware('validate_session');

Route::group(['prefix' => 'database', 'middleware' => 'validate_session'], function(){

    Route::get('H1','DatabaseController@uploadH1')->middleware('is_main_dealer');
    Route::get('H1/export_excel', 'DatabaseController@export_excel_h1')->middleware('is_main_dealer');
    Route::post('H1/import_excel', 'DatabaseController@import_excel_h1')->middleware('is_main_dealer');
    
    Route::get('H2','DatabaseController@uploadH2');
    Route::get('H2/export_excel', 'DatabaseController@export_excel_h2');
    Route::post('H2/import_excel', 'DatabaseController@import_excel_h2');
   
});
