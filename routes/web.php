<?php

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

Route::resource('companies', 'CompanyController');
Route::resource('bilans', 'BilanController');
Route::resource('crs', 'CompteResultatController');
Route::get('/companies/{company}/analysis/{year}','AnalysisController@show');

Auth::routes();

Route::get('/home', 'HomeController@index');
