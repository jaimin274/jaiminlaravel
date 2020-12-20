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

Route::get('/','DemoController@index');
//Route::get('/name','DemoController@index');

Route::get('/about','DemoController@about');
Route::get('/contact','DemoController@contact');
Route::get('/menu','DemoController@menu');
