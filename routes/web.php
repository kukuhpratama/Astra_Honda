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

Route::get('/dealer','DealerController@uploadH2');

Route::group(['prefix' => 'maindealer'], function(){
    Route::get('home', 'MainDealerController@index')->name('main_dealer.home');
    
    Route::get('H1','MainDealerController@uploadH1');
    Route::get('H1/export_excel', 'MainDealerController@export_excel_h1');
    Route::post('H1/import_excel', 'MainDealerController@import_excel_h1');

    Route::get('H2','MainDealerController@uploadH2');
    Route::get('H2/export_excel', 'MainDealerController@export_excel_h2');
    Route::post('H2/import_excel', 'MainDealerController@import_excel_h2');
});

Route::get('home', 'HomeController@home')->name('home');