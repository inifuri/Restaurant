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




Auth::routes();
Route::get('/','fronController@index');
Route::get('admin','fronController@admin');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('log', 'LogController' );


Route::resource('usuario', 'UsuarioController' );
Route::name('usuarios_path')->get('/usuarios', 'UsuarioController@index');
Route::name('create_usuario_path')->get('/usuarios/create','UsuarioController@create');
Route::name('store_usuario_path')->post('/usuarios','UsuarioController@store');
Route::name('edit_usuario_path')->get('/usuarios/{usuario}/edit','UsuarioController@edit');

Route::resource('mesa', 'MesasController');
Route::name('mesas_path')->get('/mesas', 'MesasController@index');
Route::name('create_mesa_path')->get('/mesas/create','MesasController@create');
Route::name('store_mesa_path')->post('/mesas','MesasController@store');
Route::name('edit_mesa_path')->get('/mesas/{mesa}/edit','MesasController@edit');
Route::name('update_mesa_path')->put('/mesas/{post}','MesasController@update');
Route::name('delete_mesa_path')->delete('/mesas/{post}','MesasController@delete');

Route::resource('producto', 'ProductosController');
Route::name('productos_path')->get('/productos', 'ProductosController@index');
Route::name('create_producto_path')->get('/productos/create','ProductosController@create');
Route::name('store_producto_path')->post('/productos','ProductosController@store');
Route::name('edit_producto_path')->get('/productos/{producto}/edit','ProductosController@edit');

Route::resource('pedido', 'PedidosController');
Route::name('pedidos_path')->get('/pedidos', 'PedidosController@index');
Route::name('create_pedido_path')->get('/pedidos/create','PedidosController@create');
Route::name('store_pedido_path')->post('/pedidos','PedidosController@store');
Route::name('edit_pedido_path')->get('/pedidos/{pedido}/edit','PedidosController@edit');

Route::resource('cuenta', 'CuentaController');
Route::name('cuentas_path')->get('/cuentas', 'CuentaController@index');
Route::name('create_cuenta_path')->get('/cuentas/create','CuentaController@create');
Route::name('store_cuenta_path')->post('/cuentas','CuentaController@store');
Route::name('edit_cuenta_path')->get('/cuentas/{cuenta}/edit','CuentaController@edit');

Route::resource('detalle', 'DetalleController');
Route::name('detalles_path')->get('/detalles', 'DetalleController@index');
Route::name('create_detalle_path')->get('/detalles/create','DetalleController@create');
Route::name('store_detalle_path')->post('/detalles','DetalleController@store');
Route::name('edit_detalle_path')->get('/detalles/{detalle}/edit','DetalleController@edit');
