<?php

Route::get('/', [
    'as' => 'Prof.Reg',
    'uses' => 'ProfController@index']);


/*
 * Opciones del Menu
 */
Route::get('/agenda', [
    'as' => 'Prof.agenda',
    'uses' => 'ProfController@verAgenda']);

Route::get('/comportamiento', [
    'as' => 'Prof.comportamiento',
    'uses' => 'ProfController@verComportamiento']);

Route::get('/actividades', [
    'as' => 'Prof.actividades',
    'uses' => 'ProfController@verActividades']);

Route::get('/cuaderno_seguimiento', [
    'as' => 'Prof.cuadSegui',
    'uses' => 'ProfController@verCuaderno']);

/* ---- accion de actividad ---- */
Route::get('actividad/mostrar',[
    'as' => 'Prof.Act-guardar',
    'uses' => 'ProfController@mostrarActividades'    
]);

Route::get('borrar/{tarea}',[
    'as' => 'Prof.Act-borrar',
    'uses' => 'ProfController@borrarActividades'    
])->where(['tarea' => '[0-9]+']);



/* ---- accion de Cuaderno de Seguimiento ---- */
Route::get('cuaderno/mostrar',[
    'as' => 'Prof.Cua-mostrar',
    'uses' => 'ProfController@mostrarSeguimiento'    
]);

Route::post('cuaderno/guardar',[
    'as' => 'Prof.Cua-guardar',
    'uses' => 'ProfController@guardarSeguimiento'    
]);

Route::delete('cuaderno/borrar/{tarea}',[
    'as' => 'Prof.Cua-borrar',
    'uses' => 'ProfController@borrarSeguimiento'    
])->where(['tarea' => '[0-9]+']);

/* ---- ---- */
route::resource('actividad','ProfController',
                [
                    'except'=>['show','create','edit'],
                    //'parameters' => [ 'Prof'=>'id','Curso'=>'valor']
                ]
                );

route::resource('cuaderno','ProfController',
                [
                    'except'=>['show','create','edit'],
                    //'parameters' => [ 'Prof'=>'id','Curso'=>'valor']
                ]
                );
