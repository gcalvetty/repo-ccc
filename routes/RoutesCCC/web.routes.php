<?php

Route::get('/', [
    'as' => 'homeCCC',
    'uses' => 'ErrorController@index']);


/*
 * Acceso
 */
Route::get('acceder-ccc',[
        'as' => 'acceder',
        'uses' => 'Auth\LoginController@showLoginForm'
]);
Route::post('acceder-ccc',[
        'as' => 'acceder',
        'uses' => 'Auth\LoginController@login'
]);
Route::get('logout',[
        'as' => 'cerrar-acceso',
        'uses' => 'Auth\LoginController@logout'
]);

Route::post('logout',[
        'as' => 'cerrar-acceso',
        'uses' => 'Auth\LoginController@logout'
]);

Auth::routes();









 
 
 
