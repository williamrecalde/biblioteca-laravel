<?php

use App\Http\Controllers\Admin\RolController;
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
    Route::get('menu','MenuController@index')->name('menu');
    Route::get('menu/create','MenuController@create')->name('crear_menu');
    Route::post('menu','MenuController@store')->name('guardar_menu');
    Route::post('menu/guardar-orden','MenuController@guardarOrden')->name('guardar-orden');

    /*RUTAS PARA ROL */
    Route::get('rol','RolController@index')->name('rol');
    Route::get('rol/create','RolController@create')->name('crear_rol');
    Route::post('rol','RolController@store')->name('guardar_rol');
    Route::get('rol/{id}/edit','RolController@edit')->name('editar_rol');
    Route::put('rol/{id}/','RolController@update')->name('actualizar_rol');
    Route::delete('rol/{id}/','RolController@destroy')->name('eliminar_rol');
});

