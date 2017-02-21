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

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});


Route::get('/alumnos', 'AlumnosController@Index');
Route::get('/ofertas', 'OfertasController@Index');
Route::get('/mails', 'MailsController@Index');

Route::group(['prefix' => 'empresas'], function () {

  Route::get('/', 'EmpresasController@index');
  Route::get('datatableEmpresas', 'EmpresasController@datatable');
  Route::post('insertEmpresa', 'EmpresasController@insertEmpresa');
  Route::get('deleteEmpresa/{id}', 'EmpresasController@deleteEmpresa');
  Route::post('updateEmpresa', 'EmpresasController@updateEmpresa');

});