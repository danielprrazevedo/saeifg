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
    return redirect(route("login"));
});
Route::get('/home', function () {
    return redirect(route("menu"));
});

Route::any('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/login', 'Auth\LoginController@loginPage')->name('login');
Route::post('/login', 'Auth\LoginController@attempt');
Route::get('/menu', 'MenuController@index')->name('menu')->middleware('auth');

Route::group(['middleware' => 'auth', 'prefix'=>'admin'], function(){
    Route::resource('user', 'UserController');
    Route::resource('company', 'CompanyController');
    Route::resource('contract', 'ContractController');
});
