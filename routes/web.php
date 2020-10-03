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

Route::get('/', 'EmployeeController@index') -> name('emp_index');

Route::get('/emp/{id}', 'EmployeeController@show') -> name('emp_show');

Route::get('/emp/create', 'EmployeeController@create') -> name('emp_create');
Route::post('/emp/store', 'EmployeeController@store') -> name('emp_store');

Route::get('/emp/edit/{id}', 'EmployeeController@edit') -> name('emp_edit');
Route::post('/emp/update/{id}', 'EmployeeController@update') -> name('emp_update');

Route::get('/emp/destroy/{id}', 'EmployeeController@destroy') -> name('emp_destroy');
