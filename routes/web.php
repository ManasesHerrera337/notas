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
	return view('auth/login');
	// return view('welcome');
});


Auth::routes();

//formulario 1, Datos para alfredo medina

Route::get('/CrearBoletas', function () {
	return view('crearBoletas/CrearBoletas');
	// return view('welcome');
});

//enviando archivos para la lectura  GenerarBoletasController@store
Route::post('/subirArchivo', 'archivosController@import')->name('subirArchivo');


Route::get('/archivos', 'archivosController@import')->name('archivos');

Route::get('/tabla', function () {
	// return view('plantillas.pruebaPlantilla', ['nombres' => 'Daniel Campos'  ]);
	return view('reportes/plantillaBachillerato');
});	
	


Route::get('/prebaEditor', 'PlantillasController@prueba')->name('prebaEditor');	

Route::group(['middleware' => ['role:administrador'] ], function () {
	
	Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

	//CRUD PANTILLAS
	Route::resource('/plantillas', 'PlantillasController')->middleware('auth');
	Route::post('/ckeditorUploadImg', 'PlantillasController@uploadImgCkeditor')->name('ckeditorUploadImg')->middleware('auth');



	// Route::resource('/usuarios','UsuariosController')->middleware('auth');
	// Route::get('/getusers', 'UsuariosController@getBasicData')->name('getusers')->middleware('auth');
	// Route::get('/autocomplete', 'UsuariosController@getDataAutocomplete')->name('autocomplete')->middleware('auth');
	// Route::post('/buscarcorreouser', 'UsuariosController@getCorreoUser')->name('buscarcorreouser')->middleware('auth');	
	// Route::patch('/cambiarclave/{id}', 'UsuariosController@cambiarclave')->middleware('auth');
	
		
});

