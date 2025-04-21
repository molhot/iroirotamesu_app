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

Route::get('/', function () { return view('welcome');});
Route::get('/main/{id}', 'App\Http\Controllers\AppController@index')->where('id', '[0-9]+');
// C:\Users\s_s_f\デスクトップ\iroirotamesu_app\todo\app\Http\Controllers\AppController.php
