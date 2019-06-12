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
     session(['uid' => '88']);
    return view('welcome');
});

Route::prefix('/user',function(){
    Route::get('add','UserController@cate');
});

Route::prefix('/stu')->group(function(){
    Route::get('add','StuController@add');
    Route::post('add_do','StuController@store');
    Route::get('list','StuController@index');
    Route::get('del/{id}','StuController@destroy');
    Route::get('edit/{id}','StuController@edit');
    Route::post('update/{id}','StuController@update');

});

// Route::prefix('/stu')->group(function(){
//     Route::get('add','StuController@add');
// });

Route::prefix('/school')->group(function(){
Route::get('add','SchoolController@add');
Route::post('add_do','SchoolController@store');
Route::get('list','SchoolController@index');
Route::get('del/{id}','SchoolController@destroy');

});

//登录
Route::prefix('/login')->middleware('checklogin')->group(function(){
    Route::get('add','LoginController@add');
    Route::post('add_do','LoginController@store');
    Route::get('list','LoginController@index');
    // Route::get('add_do','LoginController@store');
    // Route::get('add_do','LoginController@store');
    
});

