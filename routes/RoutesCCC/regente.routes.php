<?php

Route::get('/', [
    'as' => 'Rege.Reg',
    'uses' => 'RegeController@index']);

Route::get('/comportamiento',[
    'as' => 'Rege.Comp',
    'uses' => 'RegeController@comportamiento',    
]);

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
