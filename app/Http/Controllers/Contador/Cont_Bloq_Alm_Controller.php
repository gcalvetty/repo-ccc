<?php

namespace sis_ccc\Http\Controllers\Contador;

use Illuminate\Http\Request;
use sis_ccc\Http\Controllers\Controller;
use sis_ccc\User;
use sis_ccc\libreriaCCC\queryCCC as qGECN;

class Cont_Bloq_Alm_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {       
        $sql = new qGECN;
        $lGECN = $sql::listAlumnContador($request);        
        return $lGECN;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'estado' => 'required',
        ]);
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateGECN(Request $request)
    {   
        $rude = User::find($request->id)->t_Rude;        
        if($request->accion == 1){ $rude->estado = 'No Inscrito'; }
        if($request->accion == 2){ $rude->estado = 'Inscrito'; }        
        $rude->save();
        return; 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
