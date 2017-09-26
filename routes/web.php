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
Route::get('/employeelist', 'EmployeeController@GetEmployee');
Route::post('/createemployee', 'EmployeeController@AddEmployee');
Route::post('/deleteemployee/{id}', 'EmployeeController@DeleteEmployee');

Route::get('/', function () {
    return view('createemployee');
});
