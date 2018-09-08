<?php

namespace sis_ccc\Http\Controllers\Contador;

use Illuminate\Http\Request;
use sis_ccc\Http\Controllers\Controller;
use sis_ccc\ModeloCCC\Grd_Nivel;
use sis_ccc\libreriaCCC\queryCCC as qGECN;
use sis_ccc\libreriaCCC\fncCCC as fGECN;

class ContController extends Controller {

    public function index(Request $request) {        
    
        $sql = new qGECN;
        $lGECN = $sql::listAlumnContador($request);                 
        $Niveles = Grd_Nivel::get();
        $user = fGECN::obt_nombre();        
        return view('layouts_contador/view_cont', [
            'usuactivo' => $user,
            'Lista' => $lGECN,
            'Niveles' => $Niveles,        
        ]); 
    }
    
    
}
