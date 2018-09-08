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

class RudeController extends Controller {

    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
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
        $retInf = $sql::sqlEditRude($alumno);
        
        return view('layouts_direccion/view_dir_edit', [
            'Alumno' => $alumno,   'usuactivo' => $user,   'Niveles' => $Niveles,
            'alm' => $retInf[1],        'rude' => $retInf[2],
            'gestion' => $retInf[3],    'lug_nac' => $retInf[4],
            'dir' => $retInf[5],        'idioma' => $retInf[6],
            'salud' => $retInf[7],      'serBas' => $retInf[8],
            'activ' => $retInf[9],      'net' => $retInf[10],
            'transp' => $retInf[11],    'tutor' => $retInf[12],
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
        $eGECN = $sql::sqlUpdateRude($alumno,$request);        
        return redirect()->route('Dir.Reg');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(RUDE $alumno) {
        $user = User::findOrfail($alumno->user_id);
        $user->delete();
        Session::flash('MensajeElim', $user->nombre . ' fue Eliminado!!!');
        return back();
    }

    /**
     * Remove the specified resource from storage.

     * @return \Illuminate\Http\Response
     */
    public function imprimir(RUDE $alumno) {
        $sql = new qGECN;
        $retInf = $sql::sqlImprRude($alumno);
        
        return view('layouts_imprimir/view_rude_imprimir', ['datos' => $retInf[1],
            'gestion' => collect($retInf[2]),    'lugnac' => collect($retInf[3]),
            'dir' => collect($retInf[4]),        'idioma' => collect($retInf[5]),
            'salud' => collect($retInf[6]),      'serBas' => collect($retInf[7]),
            'activ' => collect($retInf[8]),      'net' => collect($retInf[9]),
            'transp' => collect($retInf[10]),    'tutor' => collect($retInf[11])
        ]);
    }

}
