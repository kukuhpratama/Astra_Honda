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
    return view('layouts.master');
});

Route::get('/dealer','DealerController@uploadH2');
Route::get('/maindealer/H1','MainDealerController@uploadH1');
Route::get('/maindealer/H2','MainDealerController@uploadH2');

Route::get('/maindealer/H1/export_excel', 'MainDealerController@export_excel_h1');
Route::post('/maindealer/H1/import_excel', 'MainDealerController@import_excel_h1');
Route::get('/maindealer/H2/export_excel', 'MainDealerController@export_excel_h2');
Route::post('/maindealer/H2/import_excel', 'MainDealerController@import_excel_h2');