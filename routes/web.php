<?php

use Illuminate\Support\Facades\Route;



Route::get('/users','App\Http\Controllers\usersController@index');

Route::get('/clients','App\Http\Controllers\ClientsController@index');
//create
Route::get('/clients/new','App\Http\Controllers\ClientsController@new');
Route::post('/clients/save','App\Http\Controllers\ClientsController@save');

//update
Route::get('clients/{client}/update','App\Http\Controllers\ClientsController@update');

Route::patch('clients/{client}','App\Http\Controllers\ClientsController@updating');

//delete
Route::delete('clients/{client}','App\Http\Controllers\ClientsController@delete');


 


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome']);



?>

