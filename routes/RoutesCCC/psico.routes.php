<?php
Route::get('/', [
    'as' => 'Psico.Reg',
    'uses' => 'PsicoController@index']);

Route::get('/comportamiento',[
    'as' => 'Psico.Comp',
    'uses' => 'PsicoController@comportamiento',    
]);

/*
 * CRUD
 */
Route::get('/insComportamiento',[
    'as' => 'Psico.insCom',
    'uses' => 'PsicoController@insComportamiento',    
]);
Route::get('/delComportamiento',[
    'as' => 'Psico.delCom',
    'uses' => 'PsicoController@delComportamiento',    
]);
