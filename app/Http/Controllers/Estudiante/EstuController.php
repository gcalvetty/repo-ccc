<?php

namespace sis_ccc\Http\Controllers\Estudiante;

use Illuminate\Support\Facades\Auth as almLog;
use sis_ccc\ModeloCCC\RUDE;
use sis_ccc\Http\Requests;
use sis_ccc\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use sis_ccc\libreriaCCC\queryCCC as qGECN;
use sis_ccc\libreriaCCC\fncCCC as fGECN;

class EstuController extends Controller {
    var $tieneLibew, $alum, $user, $Tar, $comprt, $lisCom, $lisAct, $almAct;
    function __get($name) {
        $this->tieneLib = almLog::user()->libreta;
        $this->alum     = almLog::user()->id;
        $this->user     = fGECN::obt_nombre();        
        $this->Tar      = qGECN::listTarEst($this->alum,5);
        $this->comprt   = qGECN::listCompEst($this->alum,5);  
        $this->lisCom   = qGECN::listComunicado(2,0); // tipo, cantidad 
        $this->lisAct   = qGECN::listActividad(5);
        $this->almAct   = qGECN::almAct($this->alum);                
   }
    public function index() {  
        $this->__get(1);
        return view('layouts_estudiante/view_estu', [
            'usuactivo' => $this->user,
            'libreta'   => $this->tieneLib,
            'tareas'    => $this->Tar,
            'comp'      => $this->comprt,
            'ListaC'    => $this->lisCom,
            'ListaA'    => $this->lisAct,
            'VerCont'   => $this->almAct,            
        ]);
    }
    
    public function verAgenda(){        
        $this->__get(1);
        return view('layouts_estudiante/view_estu_agenda', [
            'usuactivo' => $this->user,  
            'VerCont'   => $this->almAct,
        ]);
    }
    
    public function verActividades(){        
        $this->__get(1);        
        return view('layouts_estudiante/view_estu_actividades', [
            'usuactivo' => $this->user,  
            'ListaC'    => $this->lisCom,
            'ListaA'    => $this->lisAct,
            'VerCont'   => $this->almAct,
            
        ]);
    }
    
    public function verComportamiento(){
        $this->__get(1);
        return view('layouts_estudiante/view_estu_comportamiento', [
            'usuactivo' => $this->user,
            'comp'   => qGECN::listCompEst($this->alum,0), 
            'VerCont'   => $this->almAct,
        ]);
    }
    
    public function Tareas_index(){
        $this->__get(1);
        return view('layouts_estudiante/view_estu_tareas', [
            'usuactivo' => $this->user,                           
            'tareas' => $this->Tar,
            'VerCont' => $this->almAct,      
        ]);
    }
    
    public function verLibreta(){       
        $this->__get(1);
        $pathToFile = 'libretas/'.Auth::user()->libreta; // or txt etc.
        $fileNameFromStorage = rawurlencode(basename($pathToFile));
        $fileNameFromDatabase = rawurlencode('пожалуйста.pdf');
        return response()->file(storage_path($pathToFile), [
                'Content-Disposition' => str_replace('%name', $fileNameFromDatabase, "inline; filename=\"%name\"; filename*=utf-8''%name"),
                'Content-Type'        => Storage::getMimeType($pathToFile),]);                
    }
}
