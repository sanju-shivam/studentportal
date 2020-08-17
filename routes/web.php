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

Auth::routes();
//frenchise data
Route::get('/home', 'HomeController@index')->name('home');
Route::get('add_frenchise','AdminController@add_frenchise');
Route::post('frenchise','AdminController@store');
Route::get('view_frenchise','AdminController@view_frenchise');
Route::get('frenchise/{id}/viewall','AdminController@viewall');
Route::get('frenchise/{id}/edit','AdminController@edit');
Route::post('/update_frenchise','AdminController@update');
Route::get('frenchise/{id}/viewall','AdminController@viewall');
Route::get('/all_students','AdminController@all_students');


//result data
Route::get('add_result','ResultController@add_result');
Route::post('result','ResultController@store');
Route::get('view_result','ResultController@view_result');
Route::get('result/{id}/edit','ResultController@edit');
Route::post('/update_result','ResultController@update');



// Students Data
Route::get('addstudent','FrenchiseController@add_students');
Route::post('addstudent','FrenchiseController@store');
 Route::get('viewstudent/{id}/show','FrenchiseController@show');
Route::get('student/{id}/edit/', 'FrenchiseController@edit');
Route::post('/update_student','FrenchiseController@update');
Route::get('student/{id}/view','FrenchiseController@view');

Route::get('/search_result','ResultController@search_results');




//fee 
	
Route::get('/addfeetable','FeeController@add_feetable');

Route::get('/addfee/{id}','FeeController@add_fee');
Route::post('/store','FeeController@store');
Route::get('/allfee','FeeController@all_fee');
/*Route::get('/edit_fee/{id}','FeeController@edit_fee');*/



//student profile 
Route::get('/student_view','StudentController@student_view');
Route::get('resultcheck','StudentController@resultcheck');

