<?php

Route::get('/', [
    'as' => 'Rege.Reg',
    'uses' => 'RegeController@index']);

Route::get('/comportamiento',[
    'as' => 'Rege.Comp',
    'uses' => 'RegeController@comportamiento',    
]);

Route::get('/comportamiento/lista-{grd_nivel}-alumnos/', 
        array('uses'=> 'RegeController@comportamiento',
              'as' => 'Rege.Comp.Nivel'))->where(['grd_nivel'=>'[0-4]']);

/*
 * CRUD
 */
Route::get('/insComportamiento',[
    'as' => 'Rege.insCom',
    'uses' => 'RegeController@insComportamiento',    
]);
Route::get('/delComportamiento',[
    'as' => 'Rege.delCom',
    'uses' => 'RegeController@delComportamiento',    
]);

Route::get('/PDFComportamiento/alum-{idAlm}-ccc',[
    'as' => 'Rege.PDFCom',
    'uses' => 'RegeController@PDFComportamiento',    
])->where(['idAlm'=>'[0-9]+']);

