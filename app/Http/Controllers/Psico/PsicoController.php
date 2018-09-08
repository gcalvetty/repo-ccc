<?php

namespace sis_ccc\Http\Controllers\Psico;

use Illuminate\Http\Request;
use sis_ccc\Http\Requests;
use sis_ccc\Http\Controllers\Controller;
use sis_ccc\ModeloCCC\Grd_Nivel;
use sis_ccc\libreriaCCC\queryCCC as qGECN;
use sis_ccc\libreriaCCC\fncCCC as fGECN;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PsicoController extends Controller {
    /*
     * Obtener fecha para la BD
     */

    public function getDateAttribute($value) {
        return Carbon::createFromFormat('Y-m-d', $value)->format('d/m/Y');
    }

    public function setDateAttribute($value) {
        return Carbon::createFromFormat('d/m/Y', $value)->toDateString();
    }

    /*
     * ----------------------
     */

    public function index(Request $request) {
        $sql = new qGECN;
        $lGECN = $sql::listAlumn($request);
        $lComp = $sql::listComp();

        $Niveles = Grd_Nivel::get();
        $user = fGECN::obt_nombre();

        return view('layouts_psico/view_psico', [
            'usuactivo' => $user,
            'Lista' => $lGECN,
            'ListaComp' => $lComp,
            'Niveles' => $Niveles,
        ]);
    }

    public function comportamiento() {
        $sql = new qGECN;
        $lGECN = $sql::listAlumnComportamientoPsico();        

        $Niveles = Grd_Nivel::get();
        $user = fGECN::obt_nombre();

        return view('layouts_psico/view_psico_comportamiento', [
            'usuactivo' => $user,
            'Lista' => $lGECN,            
            'Niveles' => $Niveles,
        ]);
    }
    
    /*
     * CRUD
     */
    public function insComportamiento(Request $req) {
        $data = $req->all();

        $dateBD = $this->setDateAttribute($data['fec']);
        DB::Table('psico_comportamiento')->insert(
                ['user_id' => $data['AlmId'],                    
                    'reg_obser' => $data['editor'],
                    'reg_fec' => $dateBD
                ]
        );
        return redirect()->route('Psico.Reg')->withSuccess('OK');
    }
    
    public function delComportamiento(Request $req) {
        $data = $req->all();

        $eliDocente = DB::delete('Delete '
                        . ' From psico_comportamiento'
                        . ' where reg_id=' . $req->AlmId);        
        return redirect()->route('Psico.Comp')->withSuccess('OK');
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
