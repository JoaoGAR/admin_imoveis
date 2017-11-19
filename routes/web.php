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
	return view('user.login');
});

Route::get('/imoveis', 'Imovel_controller@index')->name('/imoveis'); 

Route::get('/imoveis/cadastrar_imovel', function () {
	return view('admin.formulario_cadastro_imovel');
})->name('/imoveis/cadastrar_imovel');

Route::post('/imoveis/cadastrar_imovel', 'Imovel_controller@cadastrar_imovel')->name('cadastrar_imovel'); 

Route::get('/imovel/imovel_info', 'Imovel_controller@imovel_info')->name('imovel_info'); 

Route::get('/imovel/excluir_imovel', 'Imovel_controller@excluir_imovel')->name('excluir_imovel'); 

Route::get('/imovel/importar_xml', 'Imovel_controller@importar_xml')->name('importar_xml'); 