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
//     return view('welcome');
// });
Route::get('/', 'AddTaskController@index');
Route::post('/create', 'TaskController@create');
Route::get('/task/{id}', 'TaskController@show');
Route::delete('/delete/{id}', 'TaskController@destroy');
Route::get('/task/{id}/edit', 'TaskController@edit');
Route::put('/update/{id}', 'TaskController@update');

