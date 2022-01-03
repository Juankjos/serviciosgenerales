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
    Route::post('usuarios/changepass/{id}','UserController@changepass')->name('usuarios.changepass')->middleware('permission:usuarios.update');
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
    Route::get('reportes/compresor/pdfgeneral/{fechaini}/{fechafin}','CompresorController@pdfgeneral')->name('compresor.pdfgeneral');
});

// Route::resource('reportes/agua','waterController');
Route::middleware('auth')->group(function(){
    Route::get('reportes/agua','WaterController@index')->name('agua.index')->middleware('permission:agua.index');
    Route::post('reportes/agua','WaterController@store')->name('agua.store')->middleware('permission:agua.create');
    Route::get('reportes/agua/create','WaterController@create')->name('agua.create')->middleware('permission:agua.create');
    Route::post('reportes/agua/{id}','WaterController@update')->name('agua.update')->middleware('permission:agua.update');
    Route::get('reportes/agua/show/{id}','WaterController@show')->name('agua.show')->middleware('permission:agua.show');
    Route::get('reportes/agua/showreport/{id}','WaterController@showreport')->name('agua.showreport')->middleware('permission:agua.show');
    Route::delete('reportes/agua/{id}','WaterController@destroy')->name('agua.destroy')->middleware('permission:agua.destroy');
    Route::get('reportes/agua/edit/{id}','WaterController@edit')->name('agua.edit')->middleware('permission:agua.edit');
    Route::get('reportes/agua/editreport/{id}','WaterController@editreport')->name('agua.editreport')->middleware('permission:agua.edit');
    Route::get('reportes/agua/pdf/{id}','WaterController@pdf')->name('agua.pdf')->middleware('permission:agua.pdf');
    Route::get('reportes/agua/{inicio}/{final}', 'WaterController@complete')->name('agua.complete')->middleware('permission:agua.create');
    Route::post('reportes/agua/exportpdf','WaterController@exportpdf')->name('agua.exportpdf')->middleware('permission:agua.pdf');
    Route::get('reportes/agua/pdfgeneral/{fechainicio}/{fechafin}','WaterController@pdfgeneral')->name('agua.pdfgeneral')->middleware('permission:agua.pdfgeneral');
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
    Route::get('reportes/desechos/pdf/{id}','TrashController@pdf')->name('desechos.pdf')->middleware('permission:desechos.pdf');
    Route::get('reportes/desechos/pdfgeneral/{fechainicio}/{fechafin}','TrashController@pdfgeneral')->name('desechos.pdfgeneral');
});

// Route::resource('vehiculos','vehicleController');
Route::middleware('auth')->group(function(){
Route::get('vehiculos','vehicleController@index')->name('vehiculos.index');

Route::get('vehiculos/edit/{id}/','vehicleController@edit')->name('vehiculos.edit')->middleware('permission:vehiculos.edit');
Route::get('vehiculos/create','vehicleController@create')->name('vehiculos.create')->middleware('permission:vehiculos.create');
Route::post('vehiculos','vehicleController@store')->name('vehiculos.store')->middleware('permission:vehiculos.create');
Route::post('vehiculos/{id}','vehicleController@update')->name('vehiculos.update')->middleware('permission:vehiculos.edit');
Route::delete('vehiculos/destroy/{id}','vehicleController@destroy')->name('vehiculos.destroy')->middleware('permission:vehiculos.destroy');
Route::get('vehiculos/finaledit/{id}/','vehicleController@finaledit')->name('vehiculos.finaledit')->middleware('permission:vehiculos.create');
Route::post('vehiculos/completereport/{id}/','vehicleController@completereport')->name('vehiculos.completereport')->middleware('permission:vehiculos.create');
Route::get('vehiculos/pdfgeneral/{fechainicio}/{fechafin}','vehicleController@pdfgeneral')->name('vehiculos.pdfgeneral')->middleware('permission:vehiculos.pdfgeneral');
Route::get('vehiculos/pdf/{id}','vehicleController@pdf')->name('vehiculos.pdf')->middleware('permission:vehiculos.pdf');
Route::get('vehiculos/finalizados','vehicleController@finalizados')->name('vehiculos.finalizado');
});

//TICKETS
Route::middleware('auth')->group(function(){
Route::get('tickets/index','TicketsController@index')->name('tickets.index');
Route::get('tickets/create','TicketsController@create')->name('tickets.create');
});

Route::resource('emergencias','emergenciesController');
Route::get('emergencias/pdf/{id}/','emergenciesController@pdf')->name('emergencias.pdf');
Route::get('emergencias/pdfgeneral/{fechainicio}/{fechafin}','emergenciesController@pdfgeneral')->name('emergencias.pdfgeneral');