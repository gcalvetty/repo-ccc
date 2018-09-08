<?php

namespace sis_ccc\Http\Controllers;

use Illuminate\Http\Request;
use sis_ccc\Http\Requests;

class PagController extends Controller {

    /**
     * [contr_estudiante]
     * @return [vista] [vista del Estudiante]
     */
    public function contr_estudiante() {

        return view('layouts_sisccc/view_est');
    }

    /**
     * [contr_tutor]
     * @return [vista] [vista del Tutor]
     */
    public function contr_tutor() {
        return view('layouts_sisccc/view_tut');
    }

    /**
     * [contr_maestro]
     * @return [vista] [vista del Profesor]
     */
    public function contr_profesor() {
        return view('layouts_sisccc/view_prof');
    }

    /**
     * [contr_administrador]
     * @return [vista] [vista del Admini]
     */
    public function contr_administracion() {
        return view('layouts_sisccc/view_admtr');
    }

}
