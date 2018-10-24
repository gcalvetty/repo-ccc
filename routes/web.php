<?php

Route::get('/', function () {
    return 'Hello World';
});


// ------------------------------------------------

Route::group(['middleware' => 'Grp_Admtr', 'prefix' => 'administracion/', 'namespace' => 'Administracion'], function () {
    require __DIR__ . '/RoutesCCC/admtracion.routes.php';
});

 

Route::group(['middleware' => 'Grp_Cont', 'prefix' => 'contador/', 'namespace' => 'Contador'], function () {
    require __DIR__ . '/RoutesCCC/contador.routes.php';
});

Route::group(['middleware' => 'Grp_Dir', 'prefix' => 'direccion/', 'namespace' => 'Direccion'], function () {
    require __DIR__ . '/RoutesCCC/direccion.routes.php';
});

Route::group(['middleware' => 'Grp_Prof', 'prefix' => 'profesor/', 'namespace' => 'Profesor'], function () {
    require __DIR__ . '/RoutesCCC/profesor.routes.php';
});


Route::group(['middleware' => 'Grp_Secr', 'prefix' => 'secretaria/', 'namespace' => 'Secretaria'], function () {
    require __DIR__ . '/RoutesCCC/secretaria.routes.php';
});

Route::group(['middleware' => 'Grp_Insc', 'prefix' => 'inscripcion/', 'namespace' => 'Inscripcion'], function () {
    require __DIR__ . '/RoutesCCC/inscripcion.routes.php';
});

Route::group(['middleware' => 'Grp_Rege', 'prefix' => 'regente/', 'namespace' => 'Regente'], function () {
    require __DIR__ . '/RoutesCCC/regente.routes.php';
});



Route::group(['middleware' => 'Grp_Psi', 'prefix' => 'psico/', 'namespace' => 'Psico'], function () {
    require __DIR__ . '/RoutesCCC/psico.routes.php';
});

/*
 * Extranet
 */

Route::group(['middleware' => 'Grp_Estu', 'prefix' => 'estudiante/', 'namespace' => 'Estudiante'], function () {
    require __DIR__ . '/RoutesCCC/estudiante.routes.php';
});


Route::group(['middleware' => 'Grp_Tut', 'prefix' => 'tutor/', 'namespace' => 'Tutor'], function () {
    require __DIR__ . '/RoutesCCC/tutor.routes.php';
});

/**
 * fin del SIS CCC
 */

/*
 * Detenido 24-10-2018
 * 
Route::group(['middleware' => 'web'], function() {
    require __DIR__ . '/RoutesCCC/web.routes.php';
});

Route::group(['prefix' => 'ccc/', 'namespace' => 'CCC'], function () {
   // require __DIR__ . '/RoutesCCC/ccc.routes.php';
});
 * 
 * 
 */