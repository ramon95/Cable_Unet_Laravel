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

Route::group(['middleware' => ['auth']],function(){
  //Ruta de home
  Route::get('/', function () {
    return view('welcome');
  });
  Route::get('/home', 'HomeController@index')->name('home');
  /////////////////////////////////////////////////////////////////////////Canales//////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // Rutas de Canales
  // Ruta de caneles
  Route::get('canal',[
    'uses'  =>  'CanalController@index',
    'as'    =>  'canal'
  ]);
  // Ruta para crear canales
  Route::post('canalCrear',[
    'uses'  =>  'CanalController@crear',
    'as'    =>  'canalCrear'
  ]);
  // Ruta par editar los planes de canal
  Route::put('canalEditar/{id}',[
    'uses'  =>  'CanalController@editar',
    'as'    =>  'canalEditar'
  ]);
  // Ruta para eliminar los planes de canal
  Route::get('canalEliminar/{id}',[
    'uses'  =>  'CanalController@borrar',
    'as'    =>  'canalBorrar'
  ]);
///////////////////////////////////////////////////////////////////////Internet/////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // Rutas de Internet
  // Ruta de los planes de internet
  Route::get('internet',[
    'uses'  =>  'InternetController@index',
    'as'    =>  'internet'
  ]);
  // Ruta para crear el plan de internet
  Route::post('internetCrear',[
    'uses'  =>  'InternetController@crear',
    'as'    =>  'internetCrear'
  ]);
  // Ruta par editar los planes de internet
  Route::put('internetEditar/{id}',[
    'uses'  =>  'InternetController@editar',
    'as'    =>  'internetEditar'
  ]);
  // Ruta para eliminar los planes de internet
  Route::get('internetEliminar/{id}',[
    'uses'  =>  'InternetController@borrar',
    'as'    =>  'internetBorrar'
  ]);
  ///////////////////////////////////////////////////////////////////////Telefonia///////////////////////////////////////////////////////////
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // Rutas de Telefonia
  // Ruta de los planes de telefonia
  Route::get('telefonia',[
    'uses'  =>  'TelefoniaController@index',
    'as'    =>  'telefonia'
  ]);
  // Ruta para crear el plan de telefonia
  Route::post('telefoniaCrear',[
    'uses'  =>  'TelefoniaController@crear',
    'as'    =>  'telefoniaCrear'
  ]);
  // Ruta par editar los planes de telefonia
  Route::put('telefoniaEditar/{id}',[
    'uses'  =>  'TelefoniaController@editar',
    'as'    =>  'telefoniaEditar'
  ]);
  // Ruta para eliminar los planes de telefonia
  Route::get('telefoniaEliminar/{id}',[
    'uses'  =>  'TelefoniaController@borrar',
    'as'    =>  'telefoniaBorrar'
  ]);
});
