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
Route::group(array('prefix' => 'api'), function()
{

  Route::get('/', function () {
      return response()->json(['message' => 'Students and Schools API', 'status' => 'Connected']);;
  });
  Route::get('/client', function () {
  	return view('client');
  });

  Route::resource('students', 'StudentsController');
  Route::resource('schools', 'SchoolsController');
});


Route::get('/', function () {
    return redirect('api');
});