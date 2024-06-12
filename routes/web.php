<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('home');
Route::get('personas', 'App\Http\Controllers\PersonasController@index')->name('personas');
//ruta show
Route::get('personas/{nPerCodigo}', 'App\Http\Controllers\PersonasController@show')->name('personas.show');
Route::view('contacto', 'contacto')->name('contacto');





//TAREA ANTERIOR
// Route::view('nosotros', 'nosotros')->name('nosotros');
// //ruta del controlador servicios usado
// Route::get('servicios', 'App\Http\Controllers\Servicios2Controller@index')->name('servicios');
// Route::view('contacto', 'contacto')->name('contacto');


/*PRACTICA ANTERIOR
generar rutas de controlador servicios 1
    Route::resource('servicios','App\Http\Controllers\ServiciosController');
generar rutas de controlador servicios 2
    Route::resource('servicios','App\Http\Controllers\Servicios2Controller');
generar rutas de controlador servicios 3
    Route::resource('servicios','App\Http\Controllers\Servicios3Controller');
generar rutas con excepciones
    Route::resource('servicios','App\Http\Controllers\Servicios2Controller')->except('index','show');*/
