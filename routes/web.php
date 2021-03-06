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
	
    return view('welcome', ['name' => 'soumitra']);
});

Route::post('share/', 'ShareController@createAShare');

Route::get('/share', function () {
	
    return view('welcome', ['name' => 'soumitra']);
});

Route::get('share/{id}', 'ShareController@createAShareId')->name ('sharewithid');
