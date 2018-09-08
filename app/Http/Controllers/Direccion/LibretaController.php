<?php

namespace sis_ccc\Http\Controllers\Direccion;

use Illuminate\Http\Request;
use sis_ccc\Http\Controllers\Controller;
use sis_ccc\Http\Requests;
use sis_ccc\ModeloCCC\RUDE;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use sis_ccc\User;
use sis_ccc\ModeloCCC\Grd_Nivel;
use sis_ccc\libreriaCCC\queryCCC as qGECN;
use sis_ccc\libreriaCCC\fncCCC as fGECN;
use Illuminate\Support\Facades\Session;

class LibretaController extends Controller {

    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $sql = new qGECN;
        $lGECN = $sql::listAlumn($request);
        $lGECNcnt = $sql::listAlumnXAul($request);
        $Niveles = Grd_Nivel::get();
        $user = fGECN::obt_nombre();        

        return view('layouts_direccion/view_dir_libreta', [
            'usuactivo' => $user,
            'Lista' => $lGECN,
            'Niveles' => $Niveles,
            'CantAlm' => $lGECNcnt,
        ]);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RUDE $alumno) {
        
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(RUDE $alumno) {
        
        $Niveles = Grd_Nivel::get();
        $user = fGECN::obt_nombre();  
        
        $sql = new qGECN;
        
        
        return view('layouts_direccion/view_dir_libreta_edit', [
            'Alumno' => $alumno,   'usuactivo' => $user,   'Niveles' => $Niveles,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(RUDE $alumno, Request $request) {        
        $data = $request->all();        
        $sql = new qGECN;
        $eGECN = $sql::sqlUpdateLibreta($alumno,$request);        
        return redirect()->route('Dir.lib');
    }   

}
