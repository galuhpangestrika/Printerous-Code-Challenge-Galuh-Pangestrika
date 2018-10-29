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

//Route::resource('/','organizationController');
//SESSION
Route::get('/', 'sessionController@create')->name('login');
Route::post('/login', 'sessionController@store');
Route::get('/logout','sessionController@destroy');
Route::get('/ubah-password','ChangePassController@index');
Route::post('/update-password/{id}','ChangePassController@update');

Route::get('/home', 'HomeController@index')->name('home');
// ROLE
Route::post('/updateRole/{id}', 'userRoleController@update');
Route::get('/role', 'userRoleController@index');
Route::post('/role/store', 'userRoleController@store');
Route::get('/createRole', 'userRoleController@create');
Route::get('/editRole/{id}', 'userRoleController@edit');
Route::get('/destroyRole/{id}', 'userRoleController@destroy');
Route::post('/updateRole/{id}', 'userRoleController@update');
Route::get('/lihat2', 'userRoleController@lihat2');

// ORGANIZATION
Route::post('/updateOrg/{id}', 'organizationController@update');
Route::get('/organization', 'organizationController@index');
Route::post('/organization/store', 'organizationController@store');
Route::get('/createOrg', 'organizationController@create');
Route::get('/editOrg/{id}', 'organizationController@edit');
Route::get('/destroyOrg/{id}', 'organizationController@destroy');
Route::post('/updateOrg/{id}', 'organizationController@update');
Route::get('/lihat1', 'organizationController@lihat');
// PIC
Route::post('/updatePic/{id}', 'picController@update');
Route::get('/pic', 'picController@index');
Route::post('/pic/store', 'picController@store');
Route::get('/createPic', 'picController@create');
Route::get('/editPic/{id}', 'picController@edit');
Route::get('/destroyPic/{id}', 'picController@destroy');
Route::post('/updatePic/{id}', 'picController@update');
Route::get('/lihat3', 'picController@lihat3');