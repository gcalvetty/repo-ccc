<?php

namespace sis_ccc\Http\Controllers\Secretaria;

use Illuminate\Http\Request;
use sis_ccc\Http\Controllers\Controller;
use sis_ccc\ModeloCCC\Grd_Nivel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use sis_ccc\libreriaCCC\queryCCC as qGECN;

use sis_ccc\libreriaCCC\fncCCC as fGECN;
use Carbon\Carbon;

class SecrController extends Controller {

    public static $gyear = "";

    public function __construct() {
        $dt = Carbon::now();
        self::$gyear = $dt->year;
    }

    public function index(Request $request) {
        $sql = new qGECN;
        $lGECN = $sql::listAlumn($request);
        $lGECNcnt = $sql::listAlumnXAul($request);
        $Niveles = Grd_Nivel::get();
        $user = fGECN::obt_nombre();
        $lgestion = self::$gyear;
        
        $lisCom  = $sql::listComunicado(0,5);// tipo, cantidad
        $lisAct  = $sql::listActividad(5);


        return view('layouts_secretaria/view_secr', [
            'usuactivo' => $user,
            'Lista' => $lGECN,
            'Niveles' => $Niveles,
            'CantAlm' => $lGECNcnt,
            'Gestion' => $lgestion,
            
            'ListaC' => $lisCom,
            'ListaA' => $lisAct,
        ]);
    }

    /*
     * Reportes de Alumnos x Nivel
     */

    public function ReporteNivel(Request $request) {
        $sql = new qGECN;
        $sql::Reporte_Alumnos($request);
    }

    /*
     * Reportes RUDE completo
     */
    public function ReporteRude() {
        $sql = new qGECN;        
        $sql::Reporte_RUDE();
    }
    
    /*
     * Reporte de Tareas por Curso: Seccion - Primaria - Secundaria
     */
    public function ReporteTareaNivel(Request $request){
        
        $sql = new qGECN;        
        $sql::Reporte_TareasNivel($request);
    }
    
    /*
     * Reportes de Apoyo
     */
    public function ReporteRegencia(){
        $sql = new qGECN;        
        $sql::Reporte_Regencia();
    }
    public function ReporteComunicado(){
        $sql = new qGECN;        
        $sql::Reporte_Comunicado();
    }
    public function ReportePsico(){
        $sql = new qGECN;        
        $sql::Reporte_psico();
                
    }
    

    /*
     * ---- Agenda
     */

    public function verAgenda() {
        $user = fGECN::obt_nombre();
        $Niveles = Grd_Nivel::get();
        return view('layouts_secretaria/view_secr_agenda', [
            'usuactivo' => $user,
            'Niveles' => $Niveles,
        ]);
    }

    /*
     * ---- Calendario de Actividades
     */

    public function verActividades() {
        $user = fGECN::obt_nombre();
        $Niveles = Grd_Nivel::get();       
        
        return view('layouts_secretaria/view_secr_actividades', [
            'usuactivo' => $user,
            'Niveles' => $Niveles,
        ]);
    }

    /*
     * ---- Actividades
     */
    public function verReportes() {
        $user = fGECN::obt_nombre();
        $Niveles = Grd_Nivel::get();
        $lgestion = self::$gyear;

        return view('layouts_secretaria/view_secr_reportes', [
            'usuactivo' => $user,
            'Niveles' => $Niveles,
            'Gestion' => $lgestion,
        ]);
    }
    
    /*
     * ---- Calendario de Actividades
     */
    
    
    public function mostrarCalActividad() {
        $sql = new qGECN;
        $lisCom  = $sql::listActividad2();         
        return $lisCom;
    }
    
    /*
     * ---- Acciones de Calendario de Actividades
     */
    public function store(Request $request) {               
        $func = new fGECN;        
        $fec  = $func::setDateAttribute($request->act_fec); 
        $fec2 = $func::setDateAttribute($request->act_fecfin); 
        $this->validate($request, [
            'act_tit'  => ' required',
            'act_fec' => 'required'
        ]);
        
        DB::table('cal_actividad')->insert(
                [                    
                    'act_titulo' => $request->act_tit,
                    'act_fec' => $fec,
                    'act_fecfin' => $fec2,
                    ]
        );
        return;
    }
    
    public function destroy($id) {
        DB::delete('delete from cal_actividad where act_id=' . $id);
        return;
    }


}
