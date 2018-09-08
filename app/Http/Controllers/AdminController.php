<?php

namespace sis_ccc\Http\Controllers;

use Illuminate\Http\Request;

use sis_ccc\Http\Requests;

class AdminController extends Controller{
   
    /*
     * Visualizamos el Escritorio
     */
    public function escritorio() {

        return view('layouts_admin/view_escritorio');
    }
}
