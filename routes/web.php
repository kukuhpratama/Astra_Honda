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

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', function(){
    session()->flush();
    return redirect('login');
  });
  
Route::get('/', function(){
    return redirect()->route('home');
});

Route::group(['prefix'=>'home', 'middleware' => 'validate_session'], function(){
    Route::get('/', 'HomeController@index')->name('home');
});

Route::group(['prefix' => 'database', 'middleware' => 'validate_session'], function(){

    Route::get('H1','DatabaseController@uploadH1');
    Route::post('H1', 'DatabaseController@filterH1');
    Route::post('H1/export_excel', 'DatabaseController@export_excel_h1');
    Route::post('H1/import_excel', 'DatabaseController@import_excel_h1')->middleware('is_main_dealer');
    
    Route::get('H2','DatabaseController@uploadH2');
    Route::post('H2', 'DatabaseController@filterH2');
    Route::post('H2/export_excel', 'DatabaseController@export_excel_h2');
    Route::post('H2/import_excel', 'DatabaseController@import_excel_h2');
});

Route::group(['prefix' => 'user', 'middleware' => 'validate_session'], function(){

    Route::get('/','UserController@index');
    Route::get('create', 'UserController@create')->middleware('is_main_dealer');
    Route::post('store', 'UserController@store')->middleware('is_main_dealer');
    Route::get('edit/{id}', 'UserController@edit')->middleware('is_main_dealer');
    Route::post('update/{id}','UserController@update')->middleware('is_main_dealer');
    Route::get('delete/{id}', 'UserController@destroy')->middleware('is_main_dealer');
});
