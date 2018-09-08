<?php

Route::get('/', [
    'as' => 'inscr-ccc',
    'uses' => 'inscripcionController@index']);

Route::get('/nuevo-alumno', [
    'as' => 'inscr-ccc-nuevo',
    'uses' => 'inscripcionController@nuevoAlum']);

Route::get('/antiguo-alumno', [
    'as' => 'inscr-ccc-ant',
    'uses' => 'inscripcionController@antiguoAlum']);

Route::post('/reg-alum',[
    'as' => 'inscr-reg',
    'uses' => 'inscripcionController@RegAlumno']);	


Route::get('/imprimir/ccc-{alumno}-rude',
        array('uses' => 'inscripcionController@ImpRegAlumno',
              'as' => 'impr.alumno'))->where(['alumno' => '[0-9]+']);


Route::get('/reporte/lista-{grd_nivel}-alumnos/', 
        array('uses'=> 'inscripcionController@ReporteNivel',
              'as' => 'rep.alumnos'))->where(['grd_nivel'=>'[0-4]']);

/*
 * Rutas Para update - edit - etc.
 */

Route::resource('rude-ins', 'RudeInsController', ['parameters' => [
        'rude-ins'=>'alumno'
]]);

Route::get('rude-inscripcion/{alumno}/imprimir',
        ['as' => 'rude-ins.imprimir',
         'uses' => 'RudeInsController@imprimir',
         ])->where(['alumno' => '[0-9]+']);
        