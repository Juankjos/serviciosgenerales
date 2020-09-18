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


Auth::routes();

// Vista Home

Route::get('/', 'HomeController@index')->name('home');


/**
 * Rutas para rol
 */

Route::middleware('auth')->group(function(){
    Route::get('roles','RoleController@index')->name('roles.index')->middleware('permission:roles.index');
    Route::post('roles','RoleController@store')->name('roles.store')->middleware('permission:roles.create');
    Route::get('roles/create','RoleController@create')->name('roles.create')->middleware('permission:roles.create');
    Route::post('roles/{id}','RoleController@update')->name('roles.update')->middleware('permission:roles.update');
    Route::get('roles/show/{id}','RoleController@show')->name('roles.show')->middleware('permission:roles.show');
    Route::delete('roles/{id}','RoleController@destroy')->name('roles.destroy')->middleware('permission:roles.destroy');
    Route::get('roles/edit/{id}','RoleController@edit')->name('roles.edit')->middleware('permission:roles.edit');
});

/**
 * Rutas para User
 */

Route::middleware('auth')->group(function(){
    Route::get('usuarios','UserController@index')->name('usuarios.index')->middleware('permission:usuarios.index');
    Route::post('usuarios','UserController@store')->name('usuarios.store')->middleware('permission:usuarios.create');
    Route::get('usuarios/create','UserController@create')->name('usuarios.create')->middleware('permission:usuarios.create');
    Route::post('usuarios/{id}','UserController@update')->name('usuarios.update')->middleware('permission:usuarios.update');
    Route::get('usuarios/show/{id}','UserController@show')->name('usuarios.show')->middleware('permission:usuarios.show');
    Route::delete('usuarios/{id}','UserController@destroy')->name('usuarios.destroy')->middleware('permission:usuarios.destroy');
    Route::get('usuarios/edit/{id}','UserController@edit')->name('usuarios.edit')->middleware('permission:usuarios.edit');
});

/**
 * Rutas para Compresor
 */

Route::middleware('auth')->group(function(){
    Route::get('reportes/compresor','CompresorController@index')->name('compresor.index')->middleware('permission:compresor.index');
    Route::post('reportes/compresor','CompresorController@store')->name('compresor.store')->middleware('permission:compresor.create');
    Route::get('reportes/compresor/create','CompresorController@create')->name('compresor.create')->middleware('permission:compresor.create');
    Route::post('reportes/compresor/{id}','CompresorController@update')->name('compresor.update')->middleware('permission:compresor.update');
    Route::get('reportes/compresor/show/{id}','CompresorController@show')->name('compresor.show')->middleware('permission:compresor.show');
    Route::delete('reportes/compresor/{id}','CompresorController@destroy')->name('compresor.destroy')->middleware('permission:compresor.destroy');
    Route::get('reportes/compresor/edit/{id}','CompresorController@edit')->name('compresor.edit')->middleware('permission:compresor.edit');
    Route::get('reportes/compresor/pdf/{id}','CompresorController@pdf')->name('compresor.pdf')->middleware('permission:compresor.pdf');
});

// Route::resource('reportes/agua','waterController');
Route::middleware('auth')->group(function(){
    Route::get('reportes/agua','WaterController@index')->name('agua.index')->middleware('permission:agua.index');
    Route::post('reportes/agua','WaterController@store')->name('agua.store')->middleware('permission:agua.create');
    Route::get('reportes/agua/create','WaterController@create')->name('agua.create')->middleware('permission:agua.create');
    Route::post('reportes/agua/{id}','WaterController@update')->name('agua.update')->middleware('permission:agua.update');
    Route::get('reportes/agua/show/{id}','WaterController@show')->name('agua.show')->middleware('permission:agua.show');
    Route::delete('reportes/agua/{id}','WaterController@destroy')->name('agua.destroy')->middleware('permission:agua.destroy');
    Route::get('reportes/agua/edit/{id}','WaterController@edit')->name('agua.edit')->middleware('permission:agua.edit');
});

// Route::resource('reportes/desechos','trashController');
Route::middleware('auth')->group(function(){
    Route::get('reportes/desechos','TrashController@index')->name('desechos.index')->middleware('permission:desechos.index');
    Route::post('reportes/desechos','TrashController@store')->name('desechos.store')->middleware('permission:desechos.create');
    Route::get('reportes/desechos/create','TrashController@create')->name('desechos.create')->middleware('permission:desechos.create');
    Route::post('reportes/desechos/{id}','TrashController@update')->name('desechos.update')->middleware('permission:desechos.update');
    Route::get('reportes/desechos/show/{id}','TrashController@show')->name('desechos.show')->middleware('permission:desechos.show');
    Route::delete('reportes/desechos/{id}','TrashController@destroy')->name('desechos.destroy')->middleware('permission:desechos.destroy');
    Route::get('reportes/desechos/edit/{id}','TrashController@edit')->name('desechos.edit')->middleware('permission:desechos.edit');
});

Route::resource('emergencias','emergenciesController');
