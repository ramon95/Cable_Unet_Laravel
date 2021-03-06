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
    return view('index');
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
  /////////////////////////////////////////////////////////////Servicio de canales//////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // Rutas de los planes de los canales
  // Ruta de los planes de los canales
  Route::get('planCanal',[
    'uses'  =>  'PlanCanalController@index',
    'as'    =>  'planCanal'
  ]);
  // Ruta para crear el plan del canales
  Route::post('planCanalCrear',[
    'uses'  =>  'PlanCanalController@crear',
    'as'    =>  'planCanalCrear'
  ]);
  // Ruta par editar los planes de canal
  Route::put('planCanalEditar/{id}',[
    'uses'  =>  'PlanCanalController@editar',
    'as'    =>  'planCanalEditar'
  ]);
  // Ruta para eliminarel plan del canales
  Route::get('planCanalEliminar/{id}',[
    'uses'  =>  'PlanCanalController@borrar',
    'as'    =>  'planCanalBorrar'
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
  ///////////////////////////////////////////////////////////////////////Telefonia//////////////////////////////////////////////////////////
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
  /////////////////////////////////////////////////////////////////////////Usuarios/////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // Rutas de Usuario
  // Ruta de Usuario
  Route::get('usuario',[
    'uses'  =>  'UsuarioController@index',
    'as'    =>  'usuario'
  ]);
  // Ruta para crear usuarios
  Route::post('usuarioCrear',[
    'uses'  =>  'UsuarioController@crear',
    'as'    =>  'usuarioCrear'
  ]);
  // Ruta par editar los usuarios
  Route::put('usuarioEditar/{id}',[
    'uses'  =>  'UsuarioController@editar',
    'as'    =>  'usuarioEditar'
  ]);
  // Ruta para eliminar los usarios
  Route::get('usuarioEliminar/{id}',[
    'uses'  =>  'UsuarioController@borrar',
    'as'    =>  'usuarioBorrar'
  ]);
  /////////////////////////////////////////////////////////////////////////Planes////////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // Rutas de Planes
  // Ruta de Planes
  Route::get('servicio',[
    'uses'  =>  'ServicioController@index',
    'as'    =>  'servicio'
  ]);
  // Ruta para crear un servicio
  Route::post('servicioCrear',[
    'uses'  =>  'ServicioController@crear',
    'as'    =>  'servicioCrear'
  ]);
  // Ruta par editar los servicios
  Route::put('servicioEditar/{id}',[
    'uses'  =>  'ServicioController@editar',
    'as'    =>  'servicioEditar'
  ]);
  // Ruta para eliminar los servicios
  Route::get('servicioEliminar/{id}',[
    'uses'  =>  'ServicioController@borrar',
    'as'    =>  'servicioBorrar'
  ]);
});
