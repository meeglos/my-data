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

Route::get('/', function () {
    return view('/auth.login');
});

Auth::routes();

Route::get('/tasks', 'TaskController@index');
Route::get('/tasks/create', [
    'uses'  => 'TaskController@create',
    'as'    => 'tasks.create'
]);
Route::get('/tasks/store', 'TaskController@store');