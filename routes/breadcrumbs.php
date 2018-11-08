<?php
use sis_ccc\libreriaCCC\queryCCC as qGECN;

/* --------------------------- */
Breadcrumbs::register('Dir.Reg', function ($breadcrumbs) {
    $breadcrumbs->push('Dirección', route('Dir.Reg'));
});

Breadcrumbs::register('Admtr.Reg', function ($breadcrumbs) {
    $breadcrumbs->push('Administración', route('Admtr.Reg'));
});

Breadcrumbs::register('Admtr.alumnos', function ($breadcrumbs, $grd_nivel) {
    $breadcrumbs->parent('Admtr.Reg');
    $nivel = qGECN::migaNivel($grd_nivel);
    $breadcrumbs->push('Alumnos de ' . $nivel, route('Admtr.alumnos', ['grd_nivel' => 1]));
});

Breadcrumbs::register('Admtr.profesor', function ($breadcrumbs, $grd_nivel) {
    $breadcrumbs->parent('Admtr.Reg');
    $nivel = qGECN::migaNivel($grd_nivel);
    $breadcrumbs->push('Profesores de ' . $nivel, route('Admtr.profesor', ['grd_nivel' => 1]));
});

/* --------------------------- */

Breadcrumbs::register('Cont.Reg', function ($breadcrumbs) {
    $breadcrumbs->push('Contador - Bloquear Alumnos', route('Cont.Reg'));
});

Breadcrumbs::register('Cont.nivel', function ($breadcrumbs, $grd_nivel) {
    $breadcrumbs->parent('Cont.Reg');
    $nivel = qGECN::migaNivel($grd_nivel);
    $breadcrumbs->push('Alumnos de ' . $nivel, route('Admtr.alumnos', ['grd_nivel' => 1]));
});

/* --------------------------- */

Breadcrumbs::register('Dir.lib', function ($breadcrumbs) {
    $breadcrumbs->push('Libreta', route('Dir.lib'));
});

Breadcrumbs::register('libreta-d.edit', function ($breadcrumbs, $alumno) {
    $breadcrumbs->parent('Dir.lib');
    $estudiante = qGECN::migaAlumno($alumno);
    $breadcrumbs->push('Alumn' . $estudiante, route('libreta-d.edit', ['alumno' => 1]));
});

/*
 * Niveles Escolares
 */
Breadcrumbs::register('rude.nivel', function ($breadcrumbs, $grd_nivel) {
    $breadcrumbs->parent('Dir.Reg');
    $nivel = qGECN::migaNivel($grd_nivel);
    $breadcrumbs->push('Alumnos de ' . $nivel, route('rude.nivel', ['grd_nivel' => 1]));
});

/*
 * Editar AlumnosS
 */
Breadcrumbs::register('rude-d.edit', function ($breadcrumbs, $alumno) {
    $breadcrumbs->parent('Dir.Reg');
    $estudiante = qGECN::migaAlumno($alumno);
    $breadcrumbs->push('Editar Alumn' . $estudiante, route('rude-d.edit', ['alumno' => 1]));
});

Breadcrumbs::register('inscr-ccc', function ($breadcrumbs) {
    $breadcrumbs->push('Inscripcion', route('inscr-ccc'));
});
Breadcrumbs::register('rude-ins.edit', function ($breadcrumbs, $alumno) {
    $breadcrumbs->parent('inscr-ccc');
    $estudiante = qGECN::migaAlumno($alumno);
    $breadcrumbs->push('Cambiar de Curso Alumn' . $estudiante, route('rude-ins.edit', ['alumno' => 1]));
});

/*
 * Perfiles
 */
Breadcrumbs::register('Dir.perfil', function ($breadcrumbs) {
    $breadcrumbs->parent('Dir.Reg');
    $breadcrumbs->push('Perfil', route('Dir.perfil'));
});
