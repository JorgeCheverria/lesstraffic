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


Route::get('', function () {
    return view('index');
});


Route::get('servicios', function () {
    return view('servicios');
});


Route::get('contactos', function () {
    return view('contactos');
});
Auth::routes();
//Route::group(['middleware' => ['auth']], function () {
Route::get('admin', 'AdminController@index');
Route::get('admin/indicadores/indicadores', 'AdminController@indicadores');
Route::get('admin/roles/configuracion', 'AdminController@RolesConfiguracion');
Route::get('admin/roles/registro', 'AdminController@RolesRegistro');
Route::get('admin/usuarios/asignacion', 'AdminController@UsuariosAsignacion');
Route::get('admin/usuarios/configuracion', 'AdminController@UsuariosConfiguracion');
Route::get('admin/usuarios/registro', 'AdminController@UsuariosRegistro');

Route::get('admin/analisis/seleccion', 'AdminController@SeleccionPuntos');
Route::get('admin/analisis/registro', 'AdminController@RegistroPuntos');
Route::get('admin/analisis/trayectoria', 'AdminController@TrayectoriaPuntos');
Route::get('admin/analisis/ajax_carga_data', 'AdminController@ajax_carga_data');
Route::get('admin/analisis/ajax_carga_data/{fecha_desde}/{fecha_hasta}', 'AdminController@ajax_carga_data');
Route::get('admin/analisis/ajax_carga_data2/{fecha_desde}', 'AdminController@ajax_carga_data2');
Route::get('admin/analisis/ajax_carga_data_insert/{latitud}/{longitud}/{fecha_registro}/{fecha_desde}/{fecha_hasta}/{marcador_desde}/{marcador_hasta}/{tipo_vehiculo}', 'AdminController@ajax_carga_data_insert');
Route::get('admin/analisis/ajax_r_analisis', 'AdminController@ajax_r_analisis');
Route::get('admin/analisis/ajax_guardar_gye/{fecha_desde}/{lat}/{long}/{tipo_vehiculo}/{sector}/{velocidad}', 'AdminController@ajax_guardar_gye');
//});





