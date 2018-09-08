<?php
Route::get('/', [
    'as' => 'Escritorio',
    'uses' => 'EstuController@index'])->middleware(Authorize::class . ':EscritorioView,'.RUDE::class);



