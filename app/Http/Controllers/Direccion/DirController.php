<?php

namespace sis_ccc\Http\Controllers\Direccion;

use Illuminate\Http\Request;
use sis_ccc\Http\Controllers\Controller;
use sis_ccc\ModeloCCC\Grd_Nivel;
use sis_ccc\ModeloCCC\Perfil;
use Illuminate\Support\Facades\DB;
use sis_ccc\libreriaCCC\queryCCC as qGECN;
use sis_ccc\libreriaCCC\fncCCC as fGECN;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class DirController extends Controller {

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
        
         $lisCom  = $sql::listComunicado(0);
        $lisAct  = $sql::listActividad(5);

        return view('layouts_direccion/view_dir', [
            'usuactivo' => $user,
            'Lista' => $lGECN,
            'Niveles' => $Niveles,
            'CantAlm' => $lGECNcnt,
            'Gestion' => $lgestion,
                        
            'ListaC' => $lisCom,
            'ListaA' => $lisAct,
        ]);
    }

    public function perfil() {
        $user = fGECN::obt_nombre();
        $Niveles = Grd_Nivel::get();
        $rutaActl = 'Dir.perfil.actl';
        $rutaActlFot = 'Dir.perfil.actl.fot';
        return view('layouts_perfil/view_perfil', ['usuactivo' => $user,
            'Niveles' => $Niveles,
            'ruta1' => $rutaActl,
            'ruta2' => $rutaActlFot,
        ]);
    }

    public function perfil_Actl(Request $request) {
        Perfil::updateOrCreate($request);
        Return redirect()->to('DirController@perfil');
    }

    public function perfil_Actl_Fot() {
        return 'Actualizar Foto';
    }
    

    /*
     * ---- Direccion ----
     */

    public function listDocentes() {
        $sql = new qGECN;
        $user = fGECN::obt_nombre();
        $Niveles = Grd_Nivel::get();
        $listDoc_noAsg = $sql::list_Docentes_sinA();
        $listDoc_Sen = $sql::list_Docentes(1);
        $listDoc_Pri = $sql::list_Docentes(2);
        $listDoc_Sec = $sql::list_Docentes(3);
        $listDoc_Tll = $sql::list_Docentes(4);
        return view('layouts_direccion/view_dir_docente', [
            'usuactivo' => $user,
            'Niveles' => $Niveles,
            'l0' => $listDoc_noAsg,
            'l4' => $listDoc_Tll,
            'l1' => $listDoc_Sen,
            'l2' => $listDoc_Pri,
            'l3' => $listDoc_Sec,
        ]);
    }

    public function asignarMaterias(Request $req) {
        $mater = "";
        $curso = "";
        $contador = 0;
        
        $this->validate($req, [
            'DocId' => ' required',
        ]);      
        
        DB::table('prof_materia')->where('user_id', '=', $req->DocId)->delete();

        foreach ($req->request as $key => $val) {
            if (is_array($val)) {
                foreach ($val as $key1 => $val2) {
                    $curso .= $val2 . ",";
                }
                if ($mater != "") {                                        
                    $insDocente = DB::table('prof_materia')->insert(
                            ['user_id' => $req->DocId,
                                'gmat_id' => $mater,
                                'grd_id' => $curso,
                    ]);
                    $mater = "";
                    $curso = "";
                    $contador++;                   
                }
            } else {
                $mater = "" . $val; 
                $curso = "";
            }
        }
        return redirect()->route('Dir.Doc')->withSuccess('Se guardo el registro Correctamente!!!');
    }

    /*
     * ---- Agenda
     */

    public function verAgenda() {
        $user = fGECN::obt_nombre();
        $Niveles = Grd_Nivel::get();

        return view('layouts_direccion/view_dir_agenda', [
            'usuactivo' => $user,
            'Niveles' => $Niveles,
        ]);
    }

    /*
     * ---- Actividades
     */

    public function verActividades() {
        $user = fGECN::obt_nombre();
        $Niveles = Grd_Nivel::get();
        return view('layouts_direccion/view_dir_actividades', [
            'usuactivo' => $user,
            'Niveles' => $Niveles,
        ]);
    }
    
    /*
     * ---- Comunicado
     */
    public function verComunicado(){
        $sql = new qGECN;
        $user = fGECN::obt_nombre();
        $Niveles = Grd_Nivel::get();
        $lComTip = $sql::listComTipo();
        
        return view('layouts_direccion/view_dir_comunicado', [
            'usuactivo' => $user,
            'Niveles' => $Niveles,
            'ListaComTip' => $lComTip
        ]);
    }
    
    public function mostrarComunicado() {
        $sql = new qGECN;
        $lisCom  = $sql::listComunicado(0);         
        return $lisCom;
    }
    
    /*
     * ---- Acciones de Comunicado
     */
    public function store(Request $request) {        
        $func = new fGECN;        
        $fec = $func::setDateAttribute($request->com_fec);               
        $this->validate($request, [
            'com_tit'  => ' required',
            'com_desc' => 'required'
        ]);
        DB::table('comunicado')->insert(
                [
                    'com_tipo' => $request->com_tipo,
                    'com_titulo' => $request->com_tit,
                    'com_desc' => $request->com_desc,
                    'com_fec' => $fec
                    ]
        );
        return;
    }
    
    public function destroy($id) {
        DB::delete('delete from comunicado where com_id=' . $id);
        return;
    }

}
