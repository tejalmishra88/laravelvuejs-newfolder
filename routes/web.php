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
Route::get('tasks', 'todocontroller@getnames');
Route::post('tasks4', 'todocontroller@savenames');
Route::post('tasks5', 'todocontroller@delete');
Route::post('editapi', 'todocontroller@edit');
Route::post('getrecordbyidapi', 'todocontroller@getrecordbyid');
Route::get('tasks1', 'ballcontroller@getnames');
Route::post('tasks2', 'ballcontroller@savenames');
Route::post('tasks3', 'ballcontroller@delete');