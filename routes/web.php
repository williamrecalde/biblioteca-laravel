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

Route::get('/','InicioController@index');
Route::get('/welcome',function(){
    return view('welcome');
});

Route::get('/saludo',function(){
    return "Esto esta funcionando";
});

Route::get('/layout',function(){
    return view('theme.lte.layout');
});

Route::get('/header',function(){
    return view('theme.lte.header');
});

//asi se cachea la ruta
//Route::get('admin/permiso','Admin\PermisoController@index')->name('permiso');

//asi no se cachea la ruta pero se agiliza para no escribir tanto prefijos
Route::group(['prefix'=>'admin','namespace'=>'Admin'], function(){
    Route::get('permiso','PermisoController@index')->name('permiso');
    Route::get('permiso/crear','PermisoController@create')->name('crear_permiso');
});
