<?php

return array(
    'pie' => array(
        'Tit' => 'Colegio Cristiano Colcapirhua',
        'Dev' => 'GECN-Dev'),
    'menuIntranet1' => array(
        'admin/' => array('WebMaster', 'fa-cubes'),
        'administracion/' => array('Administración', 'fa-desktop'),
        'direccion/' => array('Dirección', 'fa-skyatlas'),
        'profesor/' => array('Profesor', 'fa-id-card-o'),
    ),
    'menuIntranet2' => array(
        'contador/' => array('Contador', 'fa-modx'),
        'secretaria/' => array('Secretaría', 'fa-puzzle-piece'),
        'regente/' => array('Regente', 'fa-binoculars'),
    ),
    'menuExtranet' => array(
        'estudiante/' => array('Estudiante', 'fa-graduation-cap'),
        'tutor/' => array('Tutor', 'fa-address-book'),
    ),
    'impr' => array(
        'nom_col' =>'COLEGIO CRISTIANO COLCAPIRHUA',
        'cod-col'   => '40900025',
        'dis-col'   => 'COLCAPIRHUA',
        'dis-num-col' => '3024'
    ),
    
    
    /* ---- Intranet ---- */
    'menuAdm' => array(
        array('url' => 'administrativos', 'tit' => 'Administrativos'),
        array('url' => 'profesores', 'tit' => 'Plantel Educativo'),
        array('url' => 'alumnos', 'tit' => 'Plantel Estudiantil'),
    ),
    'menuAdmtr' => array(
        array('url' => 'administrativos', 'tit' => 'Administrativos'),
        array('url' => 'profesores', 'tit' => 'Plantel Educativo'),
        array('url' => 'alumnos', 'tit' => 'Plantel Estudiantil'),
    ),
    'menuDir' => array(
        array('url' => 'profesores', 'tit' => 'Plantel Educativo'),
        array('url' => 'alumnos', 'tit' => 'Plantel Estudiantil'),
    ),
    'menuProf' => array(
        array('url' => 'tareas', 'tit' => 'Actividades Tareas'),
        array('url' => 'alumnos', 'tit' => 'Plantel Estudiantil'),
    ),
    'menuCont' => array(
        array('url' => 'mensualidad', 'tit' => 'Mensualidades'),
        array('url' => 'alumnos', 'tit' => 'Plantel Estudiantil'),
    ),
    'menuSecr' => array(
        array('url' => 'administrativos', 'tit' => 'Plantel Administrativo'),
        array('url' => 'profesores', 'tit' => 'Plantel Educativo'),
        array('url' => 'alumnos', 'tit' => 'Plantel Estudiantil'),
    ),
    'menuReg' => array(
        array('url' => 'alumnos', 'tit' => 'Plantel Estudiantil'),
    ),
    /* ---- Extranet ---- */
    'menuEstu_ccc' => array( 
       0 => array('url' => 'Escritorio', 'tit' => 'Escritorio'),       
       1 => array('url' => 'Rude', 'tit' => 'RUDE'),
       2 => array('url' => 'Notas', 'tit' => 'Historial'),
       3 => array('url' => 'Agenda', 'tit' => 'Agenda'),
       4 => array('url' => 'Tareas', 'tit' => 'Actividades'),
       5 => array('url' => 'Compor', 'tit' => 'Comportamiento'),
       
    ),
    'menuTut_ccc' => array(
        array('url' => 'alumno', 'tit' => 'Informaciòn General'),
        array('url' => 'notas', 'tit' => 'Historial Academinco'),
        array('url' => 'agenda', 'tit' => 'Agenda Escolar'),
        array('url' => 'tareas', 'tit' => 'Actividades'),
        array('url' => 'comp-escolar', 'tit' => 'Comportamiento Escolar'),
    ),
);
