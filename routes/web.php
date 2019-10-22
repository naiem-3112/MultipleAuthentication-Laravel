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
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

//Admin Routes.............
Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/list', 'AdminController@list')->name('admin.list');
    Route::get('/create', 'AdminController@create')->name('admin.create');
    Route::get('/edit/{id}', 'AdminController@edit')->name('admin.edit');
    Route::get('/delete/{id}', 'AdminController@delete')->name('admin.delete');
});

//Role Routes..........
Route::get('/role_create', 'RoleController@create')->name('role.create');
Route::post('/role_create', 'RoleController@store')->name('role.store');
Route::get('/role_show', 'RoleController@show')->name('role.show');
Route::get('/role_delete/{id}', 'RoleController@delete')->name('role.delete');
Route::get('/role_edit/{id}', 'RoleController@edit')->name('role.edit');
Route::post('/role_update/{id}', 'RoleController@update')->name('role.update');

//Permission Routes.............
Route::resource('permission', 'PermissionController')->except(['edit', 'update', 'destroy']);
Route::get('destroy/{id}', 'PermissionController@destroy')->name('permission.destroy');
Route::get('edit/{id}', 'PermissionController@edit')->name('permission.edit');
Route::post('update/{id}', 'PermissionController@update')->name('permission.update');




