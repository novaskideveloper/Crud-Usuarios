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

use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('main');
});

Route::resource('/usuarios', 'UserController');
Route::get('usuarios/delete/{user}', 'UserController@remove')->name('usuarios.remove');

