<?php

namespace sis_ccc\Http\Controllers\Administracion;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use sis_ccc\Http\Controllers\Controller;
use sis_ccc\libreriaCCC\fncCCC as fGECN;
use sis_ccc\libreriaCCC\queryCCC as qGECN;
use sis_ccc\ModeloCCC\Grd_Nivel;
use sis_ccc\ModeloCCC\RUDE;

class AdmtrController extends Controller
{
    public static $gyear = "";
    public function __construct()
    {
        $dt          = Carbon::now();
        self::$gyear = $dt->year;
    }

    public function index(Request $request)
    {
        $sql      = new qGECN;
        $lGECN    = $sql::listAlumnContador($request);
        $lGECNcnt = $sql::listAlumnXAul($request);
        $lGECNInc = $sql::sqlInscXdia($request);
        $lgestion = self::$gyear;

        if (!$request->session()->exists('userConectado')) {
            $Niveles = Grd_Nivel::get();
            $user    = fGECN::obt_nombre();
            $request->session()->put('Niveles', $Niveles);
            $request->session()->put('userConnectado', $user);

        } else {
            $Niveles = Session::get('Niveles');
            $user    = Session::get('userConnectado');
        }

        return view('layouts_administracion/view_admtr', [
            'usuactivo'  => $user,
            'Lista'      => $lGECN,
            'Niveles'    => $Niveles,
            'CantAlm'    => $lGECNcnt,
            'CantAlmIns' => $lGECNInc,
            'Gestion'    => $lgestion,
        ]);
    }

    /*
     * Profesores
     */
    public function verProfesor(Request $request)
    {
        $sql     = new qGECN;
        $user    = fGECN::obt_nombre();
        $Niveles = Grd_Nivel::get();

        $listDoc = $sql::list_Docentes($request->grd_nivel);
        return view('layouts_administracion/view_admtr_profesor', [
            'usuactivo' => $user,
            'Niveles'   => $Niveles,
            'Lista'     => $listDoc,
        ]);
    }

    /*
     * ---- Alumnos
     */
    public function verAlumnos(Request $request)
    {
        $sql     = new qGECN;
        $user    = fGECN::obt_nombre();
        $Niveles = Grd_Nivel::get();
        $lGECN   = $sql::listAlumn($request);
        return view('layouts_administracion/view_admtr_alumnos', [
            'usuactivo' => $user,
            'Niveles'   => $Niveles,
            'Lista'     => $lGECN,
        ]);
    }
    public function AlumnoImprimir(RUDE $alumno)
    {
        $sql    = new qGECN;
        $retInf = $sql::sqlImprRude($alumno);

        return view('layouts_imprimir/view_rude_imprimir', ['datos' => $retInf[1],
            'gestion'                                                   => collect($retInf[2]), 'lugnac' => collect($retInf[3]),
            'dir'                                                       => collect($retInf[4]), 'idioma' => collect($retInf[5]),
            'salud'                                                     => collect($retInf[6]), 'serBas' => collect($retInf[7]),
            'activ'                                                     => collect($retInf[8]), 'net'    => collect($retInf[9]),
            'transp'                                                    => collect($retInf[10]), 'tutor' => collect($retInf[11]),
        ]);
    }

    /*
     * ---- Agenda
     */

    public function verAgenda()
    {
        $user    = fGECN::obt_nombre();
        $Niveles = Grd_Nivel::get();
        return view('layouts_administracion/view_admtr_agenda', [
            'usuactivo' => $user,
            'Niveles'   => $Niveles,
        ]);
    }

    /*
     * ---- Actividades
     */

    public function verActividades()
    {
        $user    = fGECN::obt_nombre();
        $Niveles = Grd_Nivel::get();
        return view('layouts_administracion/view_admtr_actividades', [
            'usuactivo' => $user,
            'Niveles'   => $Niveles,
        ]);
    }
}
