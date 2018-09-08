<?php

Route::get('/', [
    'as' => 'Admtr.Reg',
    'uses' => 'AdmtrController@index']);

/*
 * Opciones del Menu
 */
Route::get('/profesores/nivel/{grd_nivel}', [
    'as' => 'Admtr.profesor',
    'uses' => 'AdmtrController@verProfesor'
])->where(['grd_nivel'=>'[1-4]']);


Route::get('/alumnos/nivel/{grd_nivel}',[
    'as' => 'Admtr.alumnos',
    'uses' => 'AdmtrController@verAlumnos'    
])->where(['grd_nivel'=>'[1-4]']);


Route::get('/agenda', [
    'as' => 'Admtr.agenda',
    'uses' => 'AdmtrController@verAgenda']);

Route::get('/comportamiento', [
    'as' => 'Admtr.comportamiento',
    'uses' => 'AdmtrController@verComportamiento']);

Route::get('/actividades', [
    'as' => 'Admtr.actividades',
    'uses' => 'AdmtrController@verActividades']);


/*
 * Rutas Para update - edit - etc.
 */

Route::get('rude-adm/{alumno}/imprimir',
        ['as' => 'rude-adm.imprimir',
         'uses' => 'AdmtrController@AlumnoImprimir',
         ])->where(['alumno' => '[0-9]+']);

