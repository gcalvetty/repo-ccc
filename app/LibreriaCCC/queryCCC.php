<?php

namespace sis_ccc\libreriaCCC;

use Carbon\Carbon;
use sis_ccc\User;
use sis_ccc\ModeloCCC\Grd_Nivel;
use sis_ccc\ModeloCCC\Grd_Escolar;
use sis_ccc\ModeloCCC\RUDE_1_Gestion;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use sis_ccc\libreriaCCC\fncCCC as fGECN;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;

class queryCCC {

    public static $gyear = "";

    /*
     * Constructor
     */

    public function __construct() {
        $dt = Carbon::now();
        self::$gyear = $dt->year;
        ;
    }

    /*
     * Miga de Pan 
     */

    public static function migaNivel($grd_nivel) {

        $Niveles = Grd_Nivel::where('grd_nivel_id', $grd_nivel)->get();
        foreach ($Niveles as $Nivel) {
            return $Nivel->grd_nivel_nombre;
        }
        //DB::table('users')->where('name', 'John')->first();
    }

    public static function migaAlumno($id_alumno) {
        $Alumnos = User::where('id', $id_alumno->user_id)->get();
        $AlmnSex = (($id_alumno->sexo == "F") ? "a" : "o");
        foreach ($Alumnos as $alumno) {
            return $AlmnSex . " - " . $alumno->ape_paterno . " " . $alumno->ape_materno . " " . $alumno->nombre;
        }
    }
    
    public static function almAct($alum){
        $rude = User::find($alum)->t_Rude;       
        return $rude->estado;
    }

    /*
     * Mostrar Las Tareas para Estudiante
     */

    public static function listTarEst($Alm, $limite) {
        $limAux = ($limite > 0) ? " Limit " . $limite : "";
        $lisTar = DB::select('select u.nombre, rg.gst_grd_escolar as  curso, ge.grd_nombre, pt.tar_materia, pt.tar_desc, pt.tar_fec_ini
from users as u
inner join rude_1_gestion as rg on u.id = rg.user_id
left join grd_escolar as ge on ge.grd_id = rg.gst_grd_escolar
left join prof_tareas as pt on pt.tar_curso = ge.grd_nombre
where u.tipo_Usu = "Est_ccc" and u.id = ' . $Alm . ' ' . $limAux);
        return $lisTar;
    }

    /*
     * Mostrar El comportamiento para Estudiante
     */

    public static function listCompEst($Alm, $limite) {
        $limAux = ($limite > 0) ? " Limit " . $limite : "";
        $lisAluComp = DB::select('select u.id as alumnoid, rc.reg_id as id, u.nombre, u.ape_paterno, u.ape_materno, ge.grd_nombre as curso, rtc.regt_descripcion as tipcomp, rtt.regt_descripcion as tiptarj, rc.reg_obser as obser, rc.reg_fec as fec
from users as u
inner join reg_comportamiento as rc on rc.user_id = u.id
left join reg_tipo_comportamiento as rtc on  rtc.regt_id = rc.reg_tipComp
left join reg_tipo_tarjeta	as rtt on rtt.regt_id = rc.reg_tipTarj

left join rude_1_gestion as rg on u.id = rg.user_id
left join grd_escolar as ge on rg.gst_grd_escolar = ge.grd_id
where u.tipo_Usu = "Est_ccc" and u.id=' . $Alm . '
order by curso asc, fec Desc
' . $limAux . '
                ');
        return $lisAluComp;
    }

    /*
     * Listar Comunicado - Tipo
     */

    public static function listComTipo() {
        $lisComTipCom = DB::select('Select *
                from comunicado_tipo
                order by comt_tipo ASC
                ');
        return $lisComTipCom;
    }

    public static function listComunicado($tipo) {
        $limAux = ($tipo == 0) ? "  " : " and com_tipo=" . $tipo;
        $lisComunicado = DB::select('Select *
                from comunicado as c, comunicado_tipo as ct
                where c.com_tipo = ct.comt_id  ' . $limAux . '  
                order by com_fec Desc');
        return $lisComunicado;
    }

    /*
     * Listar calendario de Actividad
     */

    public static function listActividad($limite) {
        $limAux = ($limite > 0) ? " Limit " . $limite : "";
        $lisActividad = DB::select('Select *
                from cal_actividad as c 
                where datediff(act_fec,now()) > 0
                order by act_fec ASC ' . $limAux);
        return $lisActividad;
    }

    public static function listActividad2() {
        $lisActividad = DB::select('Select *
                from cal_actividad as c         
                order by act_fec DESC ');
        return $lisActividad;
    }

    /*
     * Listar Regencia - Comportamiento
     */

    public static function listComp() {
        $lisComportamiento = DB::select('Select *
                from reg_tipo_comportamiento
                order by regt_descripcion ASC
                ');
        return $lisComportamiento;
    }

    public static function listAlumnComportamiento($grd_nivel) {
        $grd_nivel_aux = "";
        if($grd_nivel!= null){
            $grd_nivel_aux ='and ge.grd_orden = '.$grd_nivel.' ';            
        }
        
        $lisAluComp = DB::select('select rc.reg_id as id, u.nombre, u.ape_paterno, u.ape_materno, ge.grd_nombre as curso, rtc.regt_descripcion as tipcomp, rtt.regt_descripcion as tiptarj, rc.reg_obser as obser, rc.reg_fec as fec
from users as u
inner join reg_comportamiento as rc on rc.user_id = u.id
left join reg_tipo_comportamiento as rtc on  rtc.regt_id = rc.reg_tipComp
left join reg_tipo_tarjeta	as rtt on rtt.regt_id = rc.reg_tipTarj

left join rude_1_gestion as rg on u.id = rg.user_id
left join grd_escolar as ge on rg.gst_grd_escolar = ge.grd_id 
where u.tipo_Usu = "Est_ccc" '.$grd_nivel_aux.'
order by curso ASC, fec Desc
                ');
        

        return $lisAluComp;
    }

    public static function listAlumnComportamientoPsico() {
        $lisAluComp = DB::select('select rc.reg_id as id, u.nombre, u.ape_paterno, u.ape_materno, ge.grd_nombre as curso, rc.reg_obser as obser, rc.reg_fec as fec
from users as u
inner join psico_comportamiento as rc on rc.user_id = u.id

left join rude_1_gestion as rg on u.id = rg.user_id
left join grd_escolar as ge on rg.gst_grd_escolar = ge.grd_id
where u.tipo_Usu = "Est_ccc"
order by curso ASC, fec Desc
                ');

        return $lisAluComp;
    }

    /*
     * Listar Cursos por Materias por Docente
     */

    public static function curso_materia($curso) {
        $lisCur = DB::select('select ge.grd_nombre as curso
            from grd_escolar as  ge
            where ge.grd_id = ' . $curso);
        return $lisCur[0]->curso;
    }

    public static function list_Cursos_materia() {
        $cursoAux = "";
        $prof = Auth::user()->id;
        $curso = array();
        $lisCur = DB::select('select distinct (pm.grd_id) as curso
            from prof_materia pm
            where user_id=' . $prof);
        foreach ($lisCur as $cur) {
            $cursoAux .= $cur->curso;
        }
        $curArr = explode(",", $cursoAux);
        sort($curArr, SORT_NATURAL | SORT_FLAG_CASE);
        $curso = array_filter(array_unique($curArr)); // los cursos que dicta el profesor       
        $curMat = array();
        foreach ($curso as $curAux) {
            $lisMat = DB::select('select nm.gmat_id as id, nm.gmat_materia as materia, pm.grd_id as curso, 
                ge.grd_nombre, ge.grd_id 
from prof_materia pm
inner join grd_nivel_materia as nm on nm.gmat_id = pm.gmat_id
left join grd_escolar as ge on ge.grd_id = pm.grd_id
where user_id=' . $prof . ' and pm.grd_id like "%' . $curAux . '%"
order by nm.gmat_materia ASC');
            $contMat = 0;
            $curMat[$curAux][$contMat++] = $curAux;
            foreach ($lisMat as $materia) {
                $curMat[$curAux][$contMat++] = $materia;
            }
        }
        return $curMat;
    }

    /*
     * Listar Docentes - sin Asignación
     */

    public static function list_Docentes_sinA() {
        $lisDocente = DB::select('Select 
                u.id, u.ape_paterno, u.ape_materno, u.nombre 
                from users as u
                left join prof_materia as pm on u.id = pm.user_id
                where (u.tipo_Usu= "Prof") and (pm.user_id is null) 
order by u.ape_paterno asc, u.ape_materno asc, u.nombre asc');

        return $lisDocente;
    }

    /*
     * Listar Docentes - con Asignación
     */

    public static function list_Docentes($nivel) {
        $lisDocente = DB::select("select distinct u.id, u.ape_paterno, u.ape_materno, u.nombre 
        From users as u
            inner join prof_materia as pm on u.id = pm.user_id
            left join grd_nivel_materia as gnm on pm.gmat_id = gnm.gmat_id 
        where (u.tipo_Usu= 'Prof') and (gnm.grd_nivel_id=" . $nivel . ")
        order by u.ape_paterno asc, u.ape_materno asc, u.nombre asc");
        return $lisDocente;
    }

    /*
     * Inscritos x Día
     */

    public static function sqlInscXdia($req) {
        //DB::select('select * from users where active = ?', [1]);
        $lisAlumno = DB::select('SELECT  DATE_FORMAT(CAST( u.created_at AS DATE ),"%c-%d") as dia, 
                                 COUNT( id ) as total
                                 from   users as u, 
                                        rude as r,
                                        rude_1_gestion as g, 
                                        grd_escolar as e,
                                        grd_nivel as n
                                where tipo_Usu="Est_ccc"
                                        and (id=r.user_id)	
                                        and (id = g.user_id)
                                        and(g.gst_gestion = ' . self::$gyear . ')
                                        and (g.gst_grd_escolar = e.grd_id)
                                        and(n.grd_nivel_id = e.grd_orden)
                                GROUP BY  DATE_FORMAT(CAST( u.created_at AS DATE ),"%c-%d")');
        return $lisAlumno;
    }

    /*
     * Listar 
     */

    public static function listAlumnXAul($req) {

        $cantAlum = RUDE_1_Gestion::busXnivel($req->grd_nivel)
                ->select('g.gst_grd_escolar as Curso', 'r.sexo'
                        , DB::raw('COUNT(r.user_id) as Alums'))
                ->join('rude as r', function($join) {
                    $join->on('r.user_id', '=', 'g.user_id');
                })
                ->join('rude_1_gestion as gest', function($join) {
                    $join->on('gest.user_id', '=', 'r.user_id')
                    ->where('gest.gst_gestion', '=', self::$gyear); //
                })
                ->join('users as u', function($join) {
                    $join->on('id', '=', 'r.user_id');
                })
                ->join('grd_escolar as e', function($join) {
                    $join->on('e.grd_id', '=', 'g.gst_grd_escolar');
                })
                ->join('grd_nivel as n', function($join) {
                    $join->on('n.grd_nivel_id', '=', 'e.grd_orden');
                })
                ->groupBy('g.gst_grd_escolar', 'r.sexo')
                ->get();
        $cur = array('taller' => array(),
            'seccion' => array(),
            'primaria' => array(),
            'secundaria' => array(),
        );
        $curtot = array('taller' => 0,
            'seccion' => 0,
            'primaria' => 0,
            'secundaria' => 0,
        );
        $curtotSex = array('taller' => array('M' => 0, 'F' => 0),
            'seccion' => array('M' => 0, 'F' => 0),
            'primaria' => array('M' => 0, 'F' => 0),
            'secundaria' => array('M' => 0, 'F' => 0),
            'totalAlum' => 0
        );

        foreach ($cantAlum as $aul) {
            if (($aul->Curso >= 1) and ( $aul->Curso <= 2)) {
                $cur['seccion'][$aul->Curso][$aul->sexo] = $aul->Alums;
                $curtot['seccion'] += $aul->Alums;
                $curtotSex['seccion'][$aul->sexo] += $aul->Alums;
            }

            if (($aul->Curso >= 3) and ( $aul->Curso <= 8)) {
                $cur['primaria'][$aul->Curso][$aul->sexo] = $aul->Alums;
                $curtot['primaria'] += $aul->Alums;
                $curtotSex['primaria'][$aul->sexo] += $aul->Alums;
            }

            if (($aul->Curso >= 9) and ( $aul->Curso <= 14)) {
                $cur['secundaria'][$aul->Curso][$aul->sexo] = $aul->Alums;
                $curtot['secundaria'] += $aul->Alums;
                $curtotSex['secundaria'][$aul->sexo] += $aul->Alums;
            }

            if (($aul->Curso >= 15)) {
                $cur['taller'][$aul->Curso][$aul->sexo] = $aul->Alums;
                $curtot['taller'] += $aul->Alums;
                $curtotSex['taller'][$aul->sexo] += $aul->Alums;
            }
        }
        $TotAlum = 0;
        foreach ($curtot as $clv => $val) {
            $curtotSex[$clv]['Total'] = $val;
            $TotAlum += $val;
        }
        $curtotSex['totalAlum'] = $TotAlum;

        return($curtotSex);
    }

    public static function listAlumn($req) {
        $lisAlumno = User::busXnom($req->buscar)
                ->select('id', 'nombre', 'ape_paterno', 'ape_materno', 'r.estado as estado', 'g.gst_aula as aula', 'e.grd_nombre as curso', 'e.grd_id as idCurso', 'n.grd_nivel_id as idNivel', 'email')
                ->join('rude as r', function ($join) {
                    $join->on('id', '=', 'r.user_id');
                })
                ->join('rude_1_gestion as g', function ($join) {
                    $join->on('id', '=', 'g.user_id')
                    ->where('g.gst_gestion', '=', self::$gyear);
                })
                ->join('grd_escolar as e', function ($join) {
                    $join->on('g.gst_grd_escolar', '=', 'e.grd_id');
                })
                ->join('grd_nivel as n', function ($join) use($req) {
                    $join->on('n.grd_nivel_id', '=', 'e.grd_orden')
                    ->when($req->grd_nivel, function($q) use ($req) {
                        return $q->where('grd_nivel_id', $req->grd_nivel);
                    });
                })
                ->where([
                    ['tipo_Usu', '=', 'Est_ccc']
                        ]
                )
                ->orderBy('r.estado', 'asc')
                ->orderBy('e.grd_id', 'asc')
                ->orderBy('ape_paterno', 'asc')
                ->orderBy('ape_materno', 'asc')
                ->orderBy('nombre', 'asc')
                ->orderBy('g.gst_aula', 'Desc')
                ->get();
        return $lisAlumno;
    }

    public static function listAlumnDoc($Curso) {
        $anio = date("Y");
        $almDocente = DB::select("select u.id, u.ape_paterno, u.ape_materno, u.nombre, g.gst_aula as aula, e.grd_nombre as curso "
                        . "               from users as u	"
                        . "               inner join rude_1_gestion g on u.id = g.user_id	"
                        . "               left join grd_escolar as e on g.gst_grd_escolar = e.grd_id "
                        . "               where ((tipo_Usu='Est_ccc') and (g.gst_gestion = " . $anio . ")) "
                        . "               and (e.grd_id = " . $Curso . " ) order by u.ape_paterno ASC, u.ape_materno ASC, u.nombre ASC");
        return $almDocente;
    }

    public static function listAlumnGestionAnterior($req) {
        $lisAlumno = User::busXnom($req->buscar)
                ->select('id', 'nombre', 'ape_paterno', 'ape_materno', 'r.estado as estado', 'g.gst_aula as aula', 'e.grd_nombre as curso', 'e.grd_id as idCurso', 'n.grd_nivel_id as idNivel', 'email')
                ->join('rude as r', function ($join) {
                    $join->on('id', '=', 'r.user_id');
                })
                ->join('rude_1_gestion as g', function ($join) {
                    $join->on('id', '=', 'g.user_id')
                    ->where('g.gst_gestion', '=', self::$gyear - 1);
                })
                ->join('grd_escolar as e', function ($join) {
                    $join->on('g.gst_grd_escolar', '=', 'e.grd_id');
                })
                ->join('grd_nivel as n', function ($join) use($req) {
                    $join->on('n.grd_nivel_id', '=', 'e.grd_orden')
                    ->when($req->grd_nivel, function($q) use ($req) {
                        return $q->where('grd_nivel_id', $req->grd_nivel);
                    });
                })
                ->where([
                    ['tipo_Usu', '=', 'Est_ccc']
                        ]
                )
                ->orderBy('r.estado', 'asc')
                ->orderBy('e.grd_id', 'asc')
                ->orderBy('ape_paterno', 'asc')
                ->orderBy('ape_materno', 'asc')
                ->orderBy('nombre', 'asc')
                ->orderBy('g.gst_aula', 'Desc')
                ->get();
        return $lisAlumno;
    }

    public static function listAlumnContador($req) {

        $lisAlumno = User::busXnom($req->buscar)
                ->select('id', 'ape_paterno', 'ape_materno', 'nombre', 'r.estado as estado', 'r.rude_id as CodAlm', 'g.gst_aula as aula', 'e.grd_nombre as curso', 'e.grd_id as idCurso', 'n.grd_nivel_id as idNivel')
                ->join('rude as r', function ($join) {
                    $join->on('id', '=', 'r.user_id');
                })
                ->join('rude_1_gestion as g', function ($join) {
                    $join->on('id', '=', 'g.user_id')
                    ->where('g.gst_gestion', '=', self::$gyear);
                })
                ->join('grd_escolar as e', function ($join) {
                    $join->on('g.gst_grd_escolar', '=', 'e.grd_id');
                })
                ->join('grd_nivel as n', function ($join) use($req) {
                    $join->on('n.grd_nivel_id', '=', 'e.grd_orden')
                    ->when($req->grd_nivel, function($q) use ($req) {
                        return $q->where('grd_nivel_id', $req->grd_nivel);
                    })
                    ->orderBy('n.grd_nivel_id', 'asc');
                })
                ->where([['tipo_Usu', '=', 'Est_ccc']])
                ->orderBy('e.grd_id', 'asc')
                ->orderBy('ape_paterno', 'asc')
                ->orderBy('ape_materno', 'asc')
                ->orderBy('nombre', 'asc');


        if (isset($req->tot)) {
            $lisAlumno = $lisAlumno->get();
        } else {
            $lisAlumno = $lisAlumno->take(1000)->get();
        }

        return $lisAlumno;
    }

    /*
     * Imprimir SQL
     */

    public static function sqlImprRude($alumno) {
        $datos = $alumno;
        $id = $datos['user_id'];

        // ---- Modificar formato de fecha 
        $fechaBD = date_create($datos['fec_nac']);
        $datos['fec_nac'] = explode("-", date_format($fechaBD, 'd-m-Y'));

        $dt = Carbon::now();

        // ---- Obtener los datos del Alumno
        $alum = DB::table('users')->select('ape_paterno', 'ape_materno', 'nombre', 'created_at as fec_reg')->where('id', $id)->first();
        $gestion = DB::table('rude_1_gestion')->where('user_id', $id)->where('gst_gestion', $dt->year)->first();
        $lug_nac = DB::table('rude_2_lug_nac')->where('user_id', $id)->first();
        $dir = DB::table('rude_4_direccion')->where('user_id', $id)->first();
        $idioma = DB::table('rude_5_1_idioma')->where('user_id', $id)->first();
        $salud = DB::table('rude_5_2_salud')->where('user_id', $id)->first();
        $serBas = DB::table('rude_5_3_serbasicos')->where('user_id', $id)->first();
        $activ = DB::table('rude_5_4_actividades')->where('user_id', $id)->first();
        $net = DB::table('rude_5_5_internet')->where('user_id', $id)->first();
        $transp = DB::table('rude_5_6_transporte')->where('user_id', $id)->first();
        $tutor = DB::table('rude_6_tutor')->where('user_id', $id)->first();

        $datos['ape_materno'] = $alum->ape_materno;
        $datos['ape_paterno'] = $alum->ape_paterno;
        $datos['nombre'] = $alum->nombre;

        // ---- Fecha de Registro
        $fechaReg = date_create($alum->fec_reg);
        $datos['fec_reg'] = explode("-", date_format($fechaReg, 'd-m-Y'));

        // ----------------------
        $retInf[1] = $datos;
        $retInf[2] = $gestion;
        $retInf[3] = $lug_nac;
        $retInf[4] = $dir;
        $retInf[5] = $idioma;
        $retInf[6] = $salud;
        $retInf[7] = $serBas;
        $retInf[8] = $activ;
        $retInf[9] = $net;
        $retInf[10] = $transp;
        $retInf[11] = $tutor;

        return $retInf;
    }

    /*
     * Actualizar Libreta del Estudiante
     */

    public static function sqlUpdateLibreta($alumno, $data) {
        $user = User::findOrfail($alumno->user_id);
        $id = $alumno->user_id;
        $alm = User::find($id);
        $alm->libreta = $data['libreta'];
        $alm->save();
    }

    /*
     * Editar RUDE
     */

    public static function sqlEditRude($alumno) {
        $cD = new fGECN;
        $id = $alumno->user_id;
        $retInf = array();
        $alm = User::find($id);
        $rude = User::find($id)->t_Rude;
        $gestion = User::find($id)->t1_Gestion;
        $lug_nac = User::find($id)->t2_Nacimiento;
        $dir = User::find($id)->t4_Direccion;
        $idioma = User::find($id)->t5_1_Idioma;
        $salud = User::find($id)->t5_2_Salud;
        $serBas = User::find($id)->t5_3_SerBasicos;
        $activ = User::find($id)->t5_4_Actividades;
        $net = User::find($id)->t5_5_Internet;
        $transp = User::find($id)->t5_6_Transporte;
        $tutor = User::find($id)->t6_Tutor;

        $rude['fec_nac'] = $cD->getDateAttribute($rude['fec_nac']);
        if ($rude['cod_rude'] == 0) {
            $rude['cod_rude'] = "";
        }
        if ($rude['rue_num'] == 0) {
            $rude['rue_num'] = "";
        }
        if ($rude['num_doc'] == 0) {
            $rude['num_doc'] = "";
        }


        if ($lug_nac == null) {
            $lug_nac = [
                'ln_pais' => '', 'ln_depa' => '', 'ln_prov' => '',
                'ln_loc' => '', 'cn_oficialia' => '', 'cn_numlibro' => '',
                'cn_numpartida' => '', 'cn_numfolio' => '',
            ];
        }

        if ($dir == null) {
            $dir = [
                'dir_prv' => '', 'dir_loc' => '', 'dir_mun' => '',
                'dir_zon' => '', 'dir_calle_ave' => '', 'dir_telf' => '', 'dir_cel' => '',
                'dir_num_viv' => '', 'dir_gmap' => '',
            ];
        }
        if ($dir['dir_cel'] == 0) {
            $dir['dir_cel'] = "";
        }

        if ($idioma == null) {
            $idioma = [
                'idi_habl' => '', 'idi_habl1' => 'Idioma 1', 'idi_habl2' => 'Idioma 2',
                'idi_habl3' => 'Idioma 3', 'idi_nacion' => '', 'idi_nacion2' => '',
            ];
        }

        if ($salud == null) {
            $salud = [
                'sal_centro' => '', 'sal_frec' => '', 'sal_disc1' => '2',
                'sal_disc2' => '2', 'sal_disc3' => '2', 'sal_adq' => '', 'sal_discOtro' => '',
            ];
        }

        if ($serBas == null) {
            $serBas = ['ser_agua' => '', 'ser_energia' => '', 'ser_letrina' => '',
            ];
        }

        if ($activ == null) {
            $activ = ['act_realizada' => '', 'act_diastrab' => '', 'recpago' => '',
            ];
        }

        if ($net == null) {
            $net = ['int_lug' => '', 'int_frecuencia' => '',
            ];
        }
        if ($transp == null) {
            $transp = ['trs_como' => '', 'trs_otro' => '', 'trs_tiempo' => '',
            ];
        }

        if ($tutor == null) {
            $tutor = [
                'ci_tut' => '', 'ape_tut' => '', 'nom_tut' => '',
                'idim_tut' => '', 'ocp_tut' => '', 'grd_tut' => '',
                'paren_tut' => '', 'ci_madre' => '', 'ape_madre' => '',
                'nom_madre' => '', 'idim_madre' => '', 'ocp_madre' => '', 'grd_madre' => '',
            ];
        }
        if ($tutor['ci_tut'] == 0) {
            $tutor['ci_tut'] = "";
        }
        if ($tutor['ci_madre'] == 0) {
            $tutor['ci_madre'] = "";
        }

        if ($lug_nac['cn_oficialia'] == "") {
            $lug_nac['cn_oficialia'] = "";
        }
        if ($lug_nac['cn_numlibro'] == "") {
            $lug_nac['cn_numlibro'] = "";
        }
        if ($lug_nac['cn_numpartida'] == "") {
            $lug_nac['cn_numpartida'] = "";
        }
        if ($lug_nac['cn_numfolio'] == "") {
            $lug_nac['cn_numfolio'] = "";
        }
        $retInf[1] = $alm;
        $retInf[2] = $rude;
        $retInf[3] = $gestion;
        $retInf[4] = $lug_nac;
        $retInf[5] = $dir;
        $retInf[6] = $idioma;
        $retInf[7] = $salud;
        $retInf[8] = $serBas;
        $retInf[9] = $activ;
        $retInf[10] = $net;
        $retInf[11] = $transp;
        $retInf[12] = $tutor;

        return $retInf;
    }

    /*
     * Alctualizar RUDE
     */

    public static function sqlUpdateRudeAntiguo($alumno, $data) {
        $user = User::findOrfail($alumno->user_id);
        $id = $alumno->user_id;
        $cD = new fGECN;       // Funciones Standares

        if ($data['fec_nac'] != "") {

            $dateBD = $cD->setDateAttribute($data['fec_nac']);
        } else {
            $dateBD = "1000-01-01";
        }
        $dt = Carbon::now();


        if ((!isset($data['num_doc'])) || ($data['num_doc'] == '')) {
            $data['num_doc'] = 0;
        }
        if (!isset($data['pert_est_otro'])) {
            $data['pert_est_otro'] = '';
        }
        if (!isset($data['trans_otro_est'])) {
            $data['trans_otro_est'] = '';
        }
        if (!isset($data['frec_inter_est'])) {
            $data['frec_inter_est'] = 0;
        }
        if ($data['frec_inter_est'] == "") {
            $data['frec_inter_est'] = 0;
        }
        if (!isset($data['tip_doc'])) {
            $data['tip_doc'] = 'Ninguno';
        }

        if ($data['tip_doc'] == "") {
            $data['tip_doc'] = 'Ninguno';
        }
        if ($data['idihab1_est'] == "") {
            $data['idihab1_est'] = 'Ninguno';
        }

        /*         * ************* */
        if (!isset($data['idihab2_est'])) {
            $data['idihab2_est'] = 'Ninguno';
        }
        if ($data['idihab2_est'] == "") {
            $data['idihab2_est'] = 'Ninguno';
        }
        /*         * ************* */
        if (!isset($data['idihab3_est'])) {
            $data['idihab3_est'] = 'Ninguno';
        }
        if ($data['idihab3_est'] == "") {
            $data['idihab3_est'] = 'Ninguno';
        }
        /*         * ************* */
        if (!isset($data['discp'])) {
            $data['discp'] = '0';
        }


        if ($data['rue_num'] == "") {
            $data['rue_num'] = 0;
        }
        if ($data['ofc_num'] == "") {
            $data['ofc_num'] = 0;
        }
        if ($data['lib_num'] == "") {
            $data['lib_num'] = 0;
        }
        if ($data['par_num'] == "") {
            $data['par_num'] = 0;
        }
        if ($data['fol_num'] == "") {
            $data['fol_num'] = 0;
        }

        if ($data['ci_madre'] == "") {
            $data['ci_madre'] = 0;
        }
        if ($data['cel'] == "") {
            $data['cel'] = 0;
        }

        $alm = User::find($id);
        $alm->nombre = $data['nombre'];
        $alm->ape_paterno = $cD->CorrDatInsc($data['ape_paterno']);
        $alm->ape_materno = $cD->CorrDatInsc($data['ape_materno']);
        $alm->created_at = $dt;
        $alm->save();


        $rude = User::find($id)->t_Rude;
        $rude->cod_rude = $data['cod_rude'];
        $rude->tip_doc = $cD->CorrDatInsc($data['tip_doc']);
        $rude->num_doc = $cD->CorrDatInsc($data['num_doc']);
        $rude->fec_nac = $dateBD;
        $rude->sexo = $data['sexo'];
        $rude->estado = 'Inscrito';
        $rude->rue_num = $cD->CorrDatInsc($data['rue_num']);
        $rude->rue_nom = $data['rue_nom'];
        $rude->save();

        // ***********************  

        $gestion = User::find($id)->t1_Gestion;
        if ($gestion == null) { //Alumno Nuevo+
            DB::Table('rude_1_gestion')->insert(
                    ['user_id' => $id,
                        'gst_gestion' => $dt->year,
                        'gst_grd_escolar' => $data['optCurso'],
                        'gst_aula' => $data['gst_aula'],
                    ]
            );
        } else {
            $gestion->gst_gestion = $dt->year;
            $gestion->gst_aula = $data['gst_aula'];
            $gestion->gst_grd_escolar = $data['optCurso'];
            $gestion->save();
        }


        // ***********************
        $lug_nac = User::find($id)->t2_Nacimiento;
        if ($lug_nac == null) {
            DB::Table('rude_2_lug_nac')->insert(
                    ['user_id' => $id,
                        'ln_pais' => $cD->CorrDatInsc($data['pais']),
                        'ln_depa' => $cD->CorrDatInsc($data['departamento']),
                        'ln_prov' => $cD->CorrDatInsc($data['provincia']),
                        'ln_loc' => $cD->CorrDatInsc($data['localidad']),
                        'cn_oficialia' => $cD->CorrDatInsc($data['ofc_num']),
                        'cn_numlibro' => $cD->CorrDatInsc($data['lib_num']),
                        'cn_numpartida' => $cD->CorrDatInsc($data['par_num']),
                        'cn_numfolio' => $cD->CorrDatInsc($data['fol_num']),
                    ]
            );
        } else {
            $lug_nac->ln_pais = $cD->CorrDatInsc($data['pais']);
            $lug_nac->ln_depa = $cD->CorrDatInsc($data['departamento']);
            $lug_nac->ln_prov = $cD->CorrDatInsc($data['provincia']);
            $lug_nac->ln_loc = $cD->CorrDatInsc($data['localidad']);
            $lug_nac->cn_oficialia = $cD->CorrDatInsc($data['ofc_num']);
            $lug_nac->cn_numlibro = $cD->CorrDatInsc($data['lib_num']);
            $lug_nac->cn_numpartida = $cD->CorrDatInsc($data['par_num']);
            $lug_nac->cn_numfolio = $cD->CorrDatInsc($data['fol_num']);
            $lug_nac->save();
        }

        $dir = User::find($id)->t4_Direccion;
        if ($dir == null) {
            DB::Table('rude_4_direccion')->insert(
                    ['user_id' => $id,
                        'dir_prv' => $cD->CorrDatInsc($data['dir_prov']),
                        'dir_loc' => $cD->CorrDatInsc($data['loc_comn']),
                        'dir_mun' => $cD->CorrDatInsc($data['municipio']),
                        'dir_zon' => $cD->CorrDatInsc($data['zn_villa']),
                        'dir_calle_ave' => $cD->CorrDatInsc($data['av_calle']),
                        'dir_telf' => $cD->CorrDatInsc($data['telf']),
                        'dir_cel' => $cD->CorrDatInsc($data['cel']),
                        'dir_num_viv' => $cD->CorrDatInsc($data['num_viv']),
                        'dir_gmap' => '',
                    ]
            );
        } else {
            $dir->dir_prv = $cD->CorrDatInsc($data['dir_prov']);
            $dir->dir_loc = $cD->CorrDatInsc($data['loc_comn']);
            $dir->dir_mun = $cD->CorrDatInsc($data['municipio']);
            $dir->dir_zon = $cD->CorrDatInsc($data['zn_villa']);
            $dir->dir_calle_ave = $cD->CorrDatInsc($data['av_calle']);
            $dir->dir_telf = $cD->CorrDatInsc($data['telf']);
            $dir->dir_cel = $cD->CorrDatInsc($data['cel']);
            $dir->dir_num_viv = $cD->CorrDatInsc($data['num_viv']);
            $dir->dir_gmap = '';
            $dir->save();
        }

        $idioma = User::find($id)->t5_1_Idioma;
        if ($idioma == null) {
            DB::Table('rude_5_1_idioma')->insert(
                    ['user_id' => $id,
                        'idi_habl' => $data['idi_est'],
                        'idi_habl1' => $data['idihab1_est'],
                        'idi_habl2' => $data['idihab2_est'],
                        'idi_habl3' => $data['idihab3_est'],
                        'idi_nacion' => $data['pert_est'],
                        'idi_nacion2' => $data['pert_est_otro'],
                    ]
            );
        } else {
            $idioma->idi_habl = $data['idi_est'];
            $idioma->idi_habl1 = $data['idihab1_est'];
            $idioma->idi_habl2 = $data['idihab2_est'];
            $idioma->idi_habl3 = $data['idihab3_est'];
            $idioma->idi_nacion = $data['pert_est'];
            $idioma->idi_nacion2 = $data['pert_est_otro'];
            $idioma->save();
        }


        $salud = User::find($id)->t5_2_Salud;
        if ($salud == null) {
            DB::Table('rude_5_2_salud')->insert(
                    ['user_id' => $id,
                        'sal_centro' => $data['exit_salud_est'],
                        'sal_frec' => $data['vec_salud_est'],
                        'sal_disc1' => $data['dis1'],
                        'sal_disc2' => $data['dis2'],
                        'sal_disc3' => $data['dis3'],
                        'sal_adq' => $data['discp'],
                        'sal_discOtro' => $cD->CorrDatInsc($data['discp_otro']),
                    ]
            );
        } else {
            $salud->sal_centro = $data['exit_salud_est'];
            $salud->sal_frec = $data['vec_salud_est'];
            $salud->sal_disc1 = $data['dis1'];
            $salud->sal_disc2 = $data['dis2'];
            $salud->sal_disc3 = $data['dis3'];
            $salud->sal_adq = $data['discp'];
            $salud->sal_discOtro = $cD->CorrDatInsc($data['discp_otro']);
            $salud->save();
        }


        $serBas = User::find($id)->t5_3_SerBasicos;
        if ($serBas == null) {
            DB::Table('rude_5_3_serbasicos')->insert(
                    ['user_id' => $id,
                        'ser_agua' => $data['ser_agua'],
                        'ser_energia' => $data['elec_est'],
                        'ser_letrina' => $data['water_est'],
                    ]
            );
        } else {
            $serBas->ser_agua = $data['ser_agua'];
            $serBas->ser_energia = $data['elec_est'];
            $serBas->ser_letrina = $data['water_est'];
            $serBas->save();
        }


        $activ = User::find($id)->t5_4_Actividades;
        if ($activ == null) {
            DB::Table('rude_5_4_actividades')->insert(
                    ['user_id' => $id,
                        'act_realizada' => $data['trab_est'],
                        'act_diastrab' => $data['dia_trab_est'],
                        'recpago' => $data['rec_pag_est'],
                    ]
            );
        } else {

            $activ->act_realizada = $data['trab_est'];
            $activ->act_diastrab = $data['dia_trab_est'];
            $activ->recpago = $data['rec_pag_est'];
            $activ->save();
        }


        $net = User::find($id)->t5_5_Internet;
        if ($net == null) {
            DB::Table('rude_5_5_internet')->insert(
                    ['user_id' => $id,
                        'int_lug' => $data['internet_est'],
                        'int_frecuencia' => $data['frec_inter_est'],
                    ]
            );
        } else {

            $net->int_lug = $data['internet_est'];
            $net->int_frecuencia = $data['frec_inter_est'];
            $net->save();
        }


        $transp = User::find($id)->t5_6_Transporte;
        if ($transp == null) {

            DB::Table('rude_5_6_transporte')->insert(
                    ['user_id' => $id,
                        'trs_como' => $data['transp_esp'],
                        'trs_otro' => $cD->CorrDatInsc($data['trans_otro_est']),
                        'trs_tiempo' => $data['transp_tiempo'],
                    ]
            );
        } else {
            $transp->trs_como = $data['transp_esp'];
            $transp->trs_otro = $cD->CorrDatInsc($data['trans_otro_est']);
            $transp->trs_tiempo = $data['transp_tiempo'];
            $transp->save();
        }


        $tutor = User::find($id)->t6_Tutor;
        if ($tutor == null) {
            DB::Table('rude_6_tutor')->insert(
                    ['user_id' => $id,
                        'ci_tut' => $cD->CorrDatInsc($data['ci_tut']),
                        'ape_tut' => $cD->CorrDatInsc($data['ape_tut']),
                        'nom_tut' => $cD->CorrDatInsc($data['nom_tut']),
                        'idim_tut' => $data['idim_tut'],
                        'ocp_tut' => $cD->CorrDatInsc($data['ocp_tut']),
                        'grd_tut' => $cD->CorrDatInsc($data['grd_tut']),
                        'paren_tut' => $cD->CorrDatInsc($data['paren_tut']),
                        'ci_madre' => $cD->CorrDatInsc($data['ci_madre']),
                        'ape_madre' => $cD->CorrDatInsc($data['ape_madre']),
                        'nom_madre' => $cD->CorrDatInsc($data['nom_madre']),
                        'idim_madre' => $data['idim_madre'],
                        'ocp_madre' => $cD->CorrDatInsc($data['ocp_madre']),
                        'grd_madre' => $cD->CorrDatInsc($data['grd_madre']),
                    ]
            );
        } else {
            $tutor->ci_tut = $cD->CorrDatInsc($data['ci_tut']);
            $tutor->ape_tut = $cD->CorrDatInsc($data['ape_tut']);
            $tutor->nom_tut = $cD->CorrDatInsc($data['nom_tut']);
            $tutor->idim_tut = $data['idim_tut'];
            $tutor->ocp_tut = $cD->CorrDatInsc($data['ocp_tut']);
            $tutor->grd_tut = $cD->CorrDatInsc($data['grd_tut']);
            $tutor->paren_tut = $cD->CorrDatInsc($data['paren_tut']);
            $tutor->ci_madre = $cD->CorrDatInsc($data['ci_madre']);
            $tutor->ape_madre = $cD->CorrDatInsc($data['ape_madre']);
            $tutor->nom_madre = $cD->CorrDatInsc($data['nom_madre']);
            $tutor->idim_madre = $data['idim_madre'];
            $tutor->ocp_madre = $cD->CorrDatInsc($data['ocp_madre']);
            $tutor->grd_madre = $cD->CorrDatInsc($data['grd_madre']);
            $tutor->save();
        }
        Session::flash('MensajeElim', $user->nombre . ' fue Actualizado!!!');
    }

    public static function sqlUpdateRude($alumno, $data) {
        $user = User::findOrfail($alumno->user_id);
        $id = $alumno->user_id;
        $cD = new fGECN;       // Funciones Standares

        if ($data['fec_nac'] != "") {

            $dateBD = $cD->setDateAttribute($data['fec_nac']);
        } else {
            $dateBD = "1000-01-01";
        }
        $dt = Carbon::now();


        if ((!isset($data['num_doc'])) || ($data['num_doc'] == '')) {
            $data['num_doc'] = 0;
        }
        if (!isset($data['pert_est_otro'])) {
            $data['pert_est_otro'] = '';
        }
        if (!isset($data['trans_otro_est'])) {
            $data['trans_otro_est'] = '';
        }
        if (!isset($data['frec_inter_est'])) {
            $data['frec_inter_est'] = 0;
        }
        if ($data['frec_inter_est'] == "") {
            $data['frec_inter_est'] = 0;
        }
        if (!isset($data['tip_doc'])) {
            $data['tip_doc'] = 'Ninguno';
        }

        if ($data['tip_doc'] == "") {
            $data['tip_doc'] = 'Ninguno';
        }
        if ($data['idihab1_est'] == "") {
            $data['idihab1_est'] = 'Ninguno';
        }

        /*         * ************* */
        if (!isset($data['idihab2_est'])) {
            $data['idihab2_est'] = 'Ninguno';
        }
        if ($data['idihab2_est'] == "") {
            $data['idihab2_est'] = 'Ninguno';
        }
        /*         * ************* */
        if (!isset($data['idihab3_est'])) {
            $data['idihab3_est'] = 'Ninguno';
        }
        if ($data['idihab3_est'] == "") {
            $data['idihab3_est'] = 'Ninguno';
        }
        /*         * ************* */
        if (!isset($data['discp'])) {
            $data['discp'] = '0';
        }


        if ($data['rue_num'] == "") {
            $data['rue_num'] = 0;
        }
        if ($data['ofc_num'] == "") {
            $data['ofc_num'] = 0;
        }
        if ($data['lib_num'] == "") {
            $data['lib_num'] = 0;
        }
        if ($data['par_num'] == "") {
            $data['par_num'] = 0;
        }
        if ($data['fol_num'] == "") {
            $data['fol_num'] = 0;
        }

        if ($data['ci_madre'] == "") {
            $data['ci_madre'] = 0;
        }
        if ($data['cel'] == "") {
            $data['cel'] = 0;
        }

        $alm = User::find($id);
        $alm->nombre = $data['nombre'];
        $alm->ape_paterno = $cD->CorrDatInsc($data['ape_paterno']);
        $alm->ape_materno = $cD->CorrDatInsc($data['ape_materno']);
        $alm->save();


        $rude = User::find($id)->t_Rude;
        $rude->cod_rude = $data['cod_rude'];
        $rude->tip_doc = $cD->CorrDatInsc($data['tip_doc']);
        $rude->num_doc = $cD->CorrDatInsc($data['num_doc']);
        $rude->fec_nac = $dateBD;
        $rude->sexo = $data['sexo'];
        $rude->estado = 'Inscrito';
        $rude->rue_num = $cD->CorrDatInsc($data['rue_num']);
        $rude->rue_nom = $data['rue_nom'];
        $rude->save();

        // ***********************  

        $gestion = User::find($id)->t1_Gestion;
        if ($gestion == null) { //Alumno Nuevo
            DB::Table('rude_1_gestion')->insert(
                    ['user_id' => $id,
                        'gst_gestion' => $dt->year,
                        'gst_grd_escolar' => $data['optCurso'],
                        'gst_aula' => $data['gst_aula'],
                    ]
            );
        } else {
            if (($gestion->gst_gestion == $dt->year)) { //Alumno Inscrito Modificar Curso, Aula
                $gestion->gst_aula = $data['gst_aula'];
                $gestion->gst_grd_escolar = $data['optCurso'];
                $gestion->save();
            } else {
                // Alumno ANtiguo  
                DB::Table('rude_1_gestion')->insert(
                        ['user_id' => $id,
                            'gst_gestion' => $dt->year,
                            'gst_grd_escolar' => $data['optCurso'],
                            'gst_aula' => $data['gst_aula'],
                        ]
                );
            }
        }

        // ***********************
        $lug_nac = User::find($id)->t2_Nacimiento;
        if ($lug_nac == null) {
            DB::Table('rude_2_lug_nac')->insert(
                    ['user_id' => $id,
                        'ln_pais' => $cD->CorrDatInsc($data['pais']),
                        'ln_depa' => $cD->CorrDatInsc($data['departamento']),
                        'ln_prov' => $cD->CorrDatInsc($data['provincia']),
                        'ln_loc' => $cD->CorrDatInsc($data['localidad']),
                        'cn_oficialia' => $cD->CorrDatInsc($data['ofc_num']),
                        'cn_numlibro' => $cD->CorrDatInsc($data['lib_num']),
                        'cn_numpartida' => $cD->CorrDatInsc($data['par_num']),
                        'cn_numfolio' => $cD->CorrDatInsc($data['fol_num']),
                    ]
            );
        } else {
            $lug_nac->ln_pais = $cD->CorrDatInsc($data['pais']);
            $lug_nac->ln_depa = $cD->CorrDatInsc($data['departamento']);
            $lug_nac->ln_prov = $cD->CorrDatInsc($data['provincia']);
            $lug_nac->ln_loc = $cD->CorrDatInsc($data['localidad']);
            $lug_nac->cn_oficialia = $cD->CorrDatInsc($data['ofc_num']);
            $lug_nac->cn_numlibro = $cD->CorrDatInsc($data['lib_num']);
            $lug_nac->cn_numpartida = $cD->CorrDatInsc($data['par_num']);
            $lug_nac->cn_numfolio = $cD->CorrDatInsc($data['fol_num']);
            $lug_nac->save();
        }

        $dir = User::find($id)->t4_Direccion;
        if ($dir == null) {
            DB::Table('rude_4_direccion')->insert(
                    ['user_id' => $id,
                        'dir_prv' => $cD->CorrDatInsc($data['dir_prov']),
                        'dir_loc' => $cD->CorrDatInsc($data['loc_comn']),
                        'dir_mun' => $cD->CorrDatInsc($data['municipio']),
                        'dir_zon' => $cD->CorrDatInsc($data['zn_villa']),
                        'dir_calle_ave' => $cD->CorrDatInsc($data['av_calle']),
                        'dir_telf' => $cD->CorrDatInsc($data['telf']),
                        'dir_cel' => $cD->CorrDatInsc($data['cel']),
                        'dir_num_viv' => $cD->CorrDatInsc($data['num_viv']),
                        'dir_gmap' => '',
                    ]
            );
        } else {
            $dir->dir_prv = $cD->CorrDatInsc($data['dir_prov']);
            $dir->dir_loc = $cD->CorrDatInsc($data['loc_comn']);
            $dir->dir_mun = $cD->CorrDatInsc($data['municipio']);
            $dir->dir_zon = $cD->CorrDatInsc($data['zn_villa']);
            $dir->dir_calle_ave = $cD->CorrDatInsc($data['av_calle']);
            $dir->dir_telf = $cD->CorrDatInsc($data['telf']);
            $dir->dir_cel = $cD->CorrDatInsc($data['cel']);
            $dir->dir_num_viv = $cD->CorrDatInsc($data['num_viv']);
            $dir->dir_gmap = '';
            $dir->save();
        }

        $idioma = User::find($id)->t5_1_Idioma;
        if ($idioma == null) {
            DB::Table('rude_5_1_idioma')->insert(
                    ['user_id' => $id,
                        'idi_habl' => $data['idi_est'],
                        'idi_habl1' => $data['idihab1_est'],
                        'idi_habl2' => $data['idihab2_est'],
                        'idi_habl3' => $data['idihab3_est'],
                        'idi_nacion' => $data['pert_est'],
                        'idi_nacion2' => $data['pert_est_otro'],
                    ]
            );
        } else {
            $idioma->idi_habl = $data['idi_est'];
            $idioma->idi_habl1 = $data['idihab1_est'];
            $idioma->idi_habl2 = $data['idihab2_est'];
            $idioma->idi_habl3 = $data['idihab3_est'];
            $idioma->idi_nacion = $data['pert_est'];
            $idioma->idi_nacion2 = $data['pert_est_otro'];
            $idioma->save();
        }


        $salud = User::find($id)->t5_2_Salud;
        if ($salud == null) {
            DB::Table('rude_5_2_salud')->insert(
                    ['user_id' => $id,
                        'sal_centro' => $data['exit_salud_est'],
                        'sal_frec' => $data['vec_salud_est'],
                        'sal_disc1' => $data['dis1'],
                        'sal_disc2' => $data['dis2'],
                        'sal_disc3' => $data['dis3'],
                        'sal_adq' => $data['discp'],
                        'sal_discOtro' => $cD->CorrDatInsc($data['discp_otro']),
                    ]
            );
        } else {
            $salud->sal_centro = $data['exit_salud_est'];
            $salud->sal_frec = $data['vec_salud_est'];
            $salud->sal_disc1 = $data['dis1'];
            $salud->sal_disc2 = $data['dis2'];
            $salud->sal_disc3 = $data['dis3'];
            $salud->sal_adq = $data['discp'];
            $salud->sal_discOtro = $cD->CorrDatInsc($data['discp_otro']);
            $salud->save();
        }


        $serBas = User::find($id)->t5_3_SerBasicos;
        if ($serBas == null) {
            DB::Table('rude_5_3_serbasicos')->insert(
                    ['user_id' => $id,
                        'ser_agua' => $data['ser_agua'],
                        'ser_energia' => $data['elec_est'],
                        'ser_letrina' => $data['water_est'],
                    ]
            );
        } else {
            $serBas->ser_agua = $data['ser_agua'];
            $serBas->ser_energia = $data['elec_est'];
            $serBas->ser_letrina = $data['water_est'];
            $serBas->save();
        }


        $activ = User::find($id)->t5_4_Actividades;
        if ($activ == null) {
            DB::Table('rude_5_4_actividades')->insert(
                    ['user_id' => $id,
                        'act_realizada' => $data['trab_est'],
                        'act_diastrab' => $data['dia_trab_est'],
                        'recpago' => $data['rec_pag_est'],
                    ]
            );
        } else {

            $activ->act_realizada = $data['trab_est'];
            $activ->act_diastrab = $data['dia_trab_est'];
            $activ->recpago = $data['rec_pag_est'];
            $activ->save();
        }


        $net = User::find($id)->t5_5_Internet;
        if ($net == null) {
            DB::Table('rude_5_5_internet')->insert(
                    ['user_id' => $id,
                        'int_lug' => $data['internet_est'],
                        'int_frecuencia' => $data['frec_inter_est'],
                    ]
            );
        } else {

            $net->int_lug = $data['internet_est'];
            $net->int_frecuencia = $data['frec_inter_est'];
            $net->save();
        }


        $transp = User::find($id)->t5_6_Transporte;
        if ($transp == null) {

            DB::Table('rude_5_6_transporte')->insert(
                    ['user_id' => $id,
                        'trs_como' => $data['transp_esp'],
                        'trs_otro' => $cD->CorrDatInsc($data['trans_otro_est']),
                        'trs_tiempo' => $data['transp_tiempo'],
                    ]
            );
        } else {
            $transp->trs_como = $data['transp_esp'];
            $transp->trs_otro = $cD->CorrDatInsc($data['trans_otro_est']);
            $transp->trs_tiempo = $data['transp_tiempo'];
            $transp->save();
        }


        $tutor = User::find($id)->t6_Tutor;
        if ($tutor == null) {
            DB::Table('rude_6_tutor')->insert(
                    ['user_id' => $id,
                        'ci_tut' => $cD->CorrDatInsc($data['ci_tut']),
                        'ape_tut' => $cD->CorrDatInsc($data['ape_tut']),
                        'nom_tut' => $cD->CorrDatInsc($data['nom_tut']),
                        'idim_tut' => $data['idim_tut'],
                        'ocp_tut' => $cD->CorrDatInsc($data['ocp_tut']),
                        'grd_tut' => $cD->CorrDatInsc($data['grd_tut']),
                        'paren_tut' => $cD->CorrDatInsc($data['paren_tut']),
                        'ci_madre' => $cD->CorrDatInsc($data['ci_madre']),
                        'ape_madre' => $cD->CorrDatInsc($data['ape_madre']),
                        'nom_madre' => $cD->CorrDatInsc($data['nom_madre']),
                        'idim_madre' => $data['idim_madre'],
                        'ocp_madre' => $cD->CorrDatInsc($data['ocp_madre']),
                        'grd_madre' => $cD->CorrDatInsc($data['grd_madre']),
                    ]
            );
        } else {
            $tutor->ci_tut = $cD->CorrDatInsc($data['ci_tut']);
            $tutor->ape_tut = $cD->CorrDatInsc($data['ape_tut']);
            $tutor->nom_tut = $cD->CorrDatInsc($data['nom_tut']);
            $tutor->idim_tut = $data['idim_tut'];
            $tutor->ocp_tut = $cD->CorrDatInsc($data['ocp_tut']);
            $tutor->grd_tut = $cD->CorrDatInsc($data['grd_tut']);
            $tutor->paren_tut = $cD->CorrDatInsc($data['paren_tut']);
            $tutor->ci_madre = $cD->CorrDatInsc($data['ci_madre']);
            $tutor->ape_madre = $cD->CorrDatInsc($data['ape_madre']);
            $tutor->nom_madre = $cD->CorrDatInsc($data['nom_madre']);
            $tutor->idim_madre = $data['idim_madre'];
            $tutor->ocp_madre = $cD->CorrDatInsc($data['ocp_madre']);
            $tutor->grd_madre = $cD->CorrDatInsc($data['grd_madre']);
            $tutor->save();
        }
        Session::flash('MensajeElim', $user->nombre . ' fue Actualizado!!!');
    }

    /*
     * Excel
     */

    public static function listAlumnReporte($req) {
        $lisAlumno = User::busXnom($req->buscar)
                ->select('id', 'ape_paterno as Paterno', 'ape_materno as Materno', 'nombre as Nombre', 'g.gst_aula as Aula', 'e.grd_nombre as curso', 't.ape_tut as Ape_Tutor', 't.nom_tut as Nom_Tutor', 't.ape_madre as Ape_Madre', 't.nom_madre as Nom_Madre', 'dr.dir_telf as Telf', 'dr.dir_Cel as Cel')
                ->join('rude as r', function ($join) {
                    $join->on('id', '=', 'r.user_id');
                })
                ->join('rude_1_gestion as g', function ($join) {
                    $join->on('id', '=', 'g.user_id')
                    ->where('g.gst_gestion', '=', self::$gyear);
                })
                ->join('grd_escolar as e', function ($join) {
                    $join->on('g.gst_grd_escolar', '=', 'e.grd_id');
                })
                ->join('grd_nivel as n', function ($join) use($req) {
                    $join->on('n.grd_nivel_id', '=', 'e.grd_orden')
                    ->when($req->grd_nivel, function($q) use ($req) {
                        return $q->where('grd_nivel_id', $req->grd_nivel);
                    })
                    ->orderBy('n.grd_nivel_id', 'asc');
                })
                ->join('rude_6_tutor as t', function ($join) {
                    $join->on('id', '=', 't.user_id');
                })
                ->join('rude_4_direccion as dr', function ($join) {
                    $join->on('id', '=', 'dr.user_id');
                })
                ->where([['tipo_Usu', '=', 'Est_ccc']])
                ->orderBy('e.grd_id', 'asc')
                ->orderBy('ape_paterno', 'asc')
                ->orderBy('ape_materno', 'asc')
                ->orderBy('nombre', 'asc');


        if (isset($req->tot)) {
            $lisAlumno = $lisAlumno->get();
        } else {
            $lisAlumno = $lisAlumno->take(1000)->get();
        }
        return $lisAlumno;
    }

    public static function listAlumnRUDE() {
        $lisAlumno = User::busXnom(null)->select("nombre as Nombre", "ape_paterno as Apellido Paterno", "ape_materno as Apellido Materno", "r.cod_rude as RUDE", "r.tip_doc as Tipo de documento", "r.num_doc as # documento", "r.fec_nac as Fecha de nacimiento", "r.sexo as Sexo", "r.rue_num as RUE", "r.rue_nom as Colegio Procedente", "gres.grd_nombre as Grado Escolar", "lnac.ln_pais as País de Nacimiento", "lnac.ln_depa as Departamento", "lnac.ln_prov as Provincia", "lnac.ln_loc as Localidad", "lnac.cn_oficialia as Oficialia", "lnac.cn_numlibro as Num. de Libro", "lnac.cn_numpartida as Partida", "lnac.cn_numfolio as Folio", "dir.dir_prv as Dir. Provincia", "dir.dir_loc as Dir. Localidad", "dir.dir_mun as Dir. Municipio", "dir.dir_zon as Dir. Zona", "dir.dir_calle_ave as Calle / Avenida", "dir.dir_telf as Teléfono", "dir.dir_cel as Celular", "dir.dir_num_viv as Num. de la Casa", "idi.idi_habl as Idioma que habla 1", "idi.idi_habl1 as Idioma que habla 2", "idi.idi_habl2 as Idioma que habla 3", "idi.idi_nacion as Grupo étnico", "idi.idi_nacion2 as Otros", "sal.sal_centro as Centro de Salud", "sal.sal_frec as Asistencia / Frecuencia", "sal.sal_disc1 as Discapacidad Sensorial", "sal.sal_disc2 as Discapacidad Motriz", "sal.sal_disc3 as Discapacidad Mental", "sal.sal_adq as Adquirida", "sal.sal_discOtro as Otros problemas", "sba.ser_agua as Agua", "sba.ser_energia as Electricidad", "sba.ser_letrina as Letrina", "act.act_realizada as Act. Realizadas", "act.act_diastrab as Act. días Trabajados", "act.recpago as Recibío pago", "inter.int_lug as Internet desde su", "inter.int_frecuencia as Frecuencia", "trn.trs_como as Como llega", "trn.trs_otro as Otro medio", "trn.trs_tiempo as Tiempo de demora", "tut.ci_tut as CI. del tutor", "tut.ape_tut as Apellido del tutor", "tut.nom_tut as Nombre del tutor", "tut.idim_tut as Idioma que habla el tutor", "tut.ocp_tut as Ocupacion del tutor", "tut.grd_tut as Grado de educación del tutor", "tut.paren_tut as Parestengo", "tut.ci_madre as CI. de la madre", "tut.ape_madre as Apellido de la madre", "tut.nom_madre as Nombre de la madre", "tut.idim_madre as Idioma que habla la madre", "tut.ocp_madre as Ocupacion de la madre", "tut.grd_madre as Grado de educacion de la madre"
                )
                ->join("rude as r", function($join) {
                    $join->on("id", "=", "r.user_id");
                })
                ->join("rude_1_gestion as rg", function($join) {
                    $join->on("id", "=", "rg.user_id")->where('rg.gst_gestion', '=', self::$gyear);
                })
                ->leftjoin("grd_escolar as gres", function($join) {
                    $join->on("gres.grd_id", "=", "rg.gst_grd_escolar");
                })
                ->leftjoin('grd_nivel as n', function ($join) {
                    $join->on('n.grd_nivel_id', '=', 'gres.grd_orden');
                })
                ->leftjoin("rude_2_lug_nac as lnac", function($join) {
                    $join->on("id", "=", "lnac.user_id");
                })
                ->leftjoin("rude_4_direccion as dir", function($join) {
                    $join->on("id", "=", "dir.user_id");
                })
                ->leftjoin("rude_5_1_idioma as idi", function($join) {
                    $join->on("id", "=", "idi.user_id");
                })
                ->leftjoin("rude_5_2_salud as sal", function($join) {
                    $join->on("id", "=", "sal.user_id");
                })
                ->leftjoin("rude_5_3_serbasicos as sba", function($join) {
                    $join->on("id", "=", "sba.user_id");
                })
                ->leftjoin("rude_5_4_actividades as act", function($join) {
                    $join->on("id", "=", "act.user_id");
                })
                ->leftjoin("rude_5_5_internet as inter", function($join) {
                    $join->on("id", "=", "inter.user_id");
                })
                ->leftjoin("rude_5_6_transporte as trn", function($join) {
                    $join->on("id", "=", "trn.user_id");
                })
                ->leftjoin("rude_6_tutor as tut", function($join) {
                    $join->on("id", "=", "tut.user_id");
                })
                ->where([['tipo_Usu', '=', 'Est_ccc']])
                ->orderBy('gres.grd_id', 'asc')
                ->orderBy('ape_paterno', 'asc')
                ->orderBy('ape_materno', 'asc')
                ->orderBy('nombre', 'asc');
        $lisAlumno = $lisAlumno->take(1000)->get();
        return $lisAlumno;
    }

    /*
     * Reporte x Nivel Alumnos
     */

    public static function Reporte_Alumnos($req) {
        $grdNiv = Grd_Nivel::select('grd_nivel_nombre as Nivel')->where('grd_nivel_id', $req->grd_nivel)->get();
        Excel::create('Alumnos - ' . $grdNiv[0]->Nivel, function($excel) use($req) {
            $excel->sheet('Curso', function($sheet) use($req) {
                $lGECN = self::listAlumnReporte($req);
                $sheet->fromArray($lGECN);
                $sheet->setOrientation('landscape');
            });
        })->export('xls');
    }

    // **********************************************************
    // **********************************************************

    /*
     * Reporte Tareas x Nivel Alumnos
     */
    public static function Rep_list_TareasNivel($req) {
        
        $lisAlumno = User::busXnom(null)->select("pt.tar_id",  "pt.tar_curso as Curso", "pt.tar_materia as Materia", "nombre as Nombre", "ape_paterno as 'Apellido Paterno'", "ape_materno as 'Apellido Materno'", "pt.tar_desc as Tarea", "pt.tar_fec_ini as Fecha")
                ->join("prof_tareas as pt", function($join) {
                    $join->on("id", "=", "pt.user_id");
                })                
                ->leftjoin('grd_escolar as ge', function ($join) {
                    $join->on("ge.grd_nombre", "=", "pt.tar_materia");
                })
                ->leftjoin("grd_nivel_materia as gnm", function($join) {
                    $join->on("pt.tar_mat_id", "=", "gnm.gmat_id");
                })
                ->where([['pt.tar_curso', '=', $req]])
                ->orderBy('pt.tar_curso', 'asc');
                
        $lisAlumno = $lisAlumno->take(1000)->get();
        return $lisAlumno;
    }

    public static function Reporte_TareasNivel($req) {
        
        $grdNiv = Grd_Escolar::select('grd_nombre')->where('grd_id', $req->grd_nivel)->get();
        $a= $grdNiv[0]->grd_nombre;
        Excel::create('Alumnos - ' . $grdNiv[0]->grd_nombre, function($excel) use($a) {
            $excel->sheet('Curso', function($sheet) use($a) {
                $lGECN = self::Rep_list_TareasNivel($a);

                $sheet->fromArray($lGECN);
                $sheet->setOrientation('landscape');
            });
        })->export('xls');
    }

    /*
     * ---- Reportes de ayuda ----
     */

    public static function Rep_list_Comportamiento() {
        $lisAlumno = User::busXnom(null)->select(
                        "rc.reg_id as id", "ge.grd_nombre as Curso", "nombre as Nombre", "ape_paterno as Apellido Paterno", "ape_materno as Apellido Materno", "rt_c.regt_descripcion as Comportamiento", "rt_t.regt_descripcion as Tarjeta", "rc.reg_obser as Observación", "rc.reg_fec as Fecha"
                )
                ->join("reg_comportamiento as rc", function($join) {
                    $join->on("id", "=", "rc.user_id");
                })
                ->leftjoin("rude_1_gestion as rg", function($join) {
                    $join->on("id", "=", "rg.user_id");
                })
                ->leftjoin("grd_escolar as ge", function($join) {
                    $join->on("ge.grd_id", "=", "rg.gst_grd_escolar");
                })
                ->leftjoin("reg_tipo_comportamiento as rt_c", function($join) {
                    $join->on("rt_c.regt_id", "=", "rc.reg_tipComp");
                })
                ->leftjoin("reg_tipo_tarjeta as rt_t", function($join) {
                    $join->on("rt_t.regt_id", "=", "rc.reg_tipTarj");
                })->where([
                    ['rg.gst_gestion', '=', '2018'],
                ])
                ->orderBy('rc.reg_fec', 'desc')
                ->get();
              
        return $lisAlumno;
    }

    // ----
    public static function Reporte_Regencia() {
        Excel::create('Regencia', function($excel) {
            $excel->sheet('Curso', function($sheet) {
                $lGECN = self::Rep_list_Comportamiento();
                $sheet->fromArray($lGECN);
                $sheet->setOrientation('landscape');
            });
        })->export('xls');
    }

    /*
     * ---- Comunicado
     */
    public static function Rep_list_comuni() {
        /*$lisAlumno = DB::table('comunicado as c')
                    ->select("com_id as Id", "com_titulo as Comunicado", "com_desc as Descripción", "com_fec as Fecha", "comt_tipo as Para" )
                    ->join("comunicado_tipo as ct", function($join) {
                                $join->on("ct.comt_id", "=", "c.com_tipo");
                            })
                    ->orderBy('com_fec', 'DESC')                    
                    ->get();*/

                    $lisAlumno = DB::select('Select  com_id as Id, com_titulo as Comunicado, com_desc as Descripción, com_fec as Fecha, comt_tipo as Para 
from comunicado as c
inner join comunicado_tipo as ct on ct.comt_id = c.com_tipo
order by com_fec Desc');
                    
            
        return $lisAlumno;
    }

    public static function Reporte_Comunicado() {
        
          Excel::create('Comunicado ', function($excel) {
          $excel->sheet('Comunicado', function($sheet) {
          $lGECN = DB::table('comunicado as c'); //self::Rep_list_comuni();
          $sheet->fromArray($lGECN);
          $sheet->setOrientation('landscape');
          });
          })->export('xls');
    }

    
    /*
     * ---- Psicologa
     */
    
    public static function Rep_list_psico() {
        $lisAlumno = User::busXnom(null)->select("rc.reg_id as id", "nombre", "ape_paterno", "ape_materno", "ge.grd_nombre as curso", "rc.reg_obser as obser", "rc.reg_fec as fec")
                ->join("psico_comportamiento as rc", function($join) {
                    $join->on("rc.user_id", "=", "id");
                })
                ->leftjoin("rude_1_gestion as rg", function($join) {
                    $join->on("id", "=", "rg.user_id");
                })
                ->leftjoin("grd_escolar as ge", function($join) {
                    $join->on("rg.gst_grd_escolar", "=", "ge.grd_id");
                })->where([
                    ['tipo_Usu', '=', 'Est_ccc'],
                ])
                ->orderBy('curso', 'ASC')
                ->orderBy('fec', 'DESC')
                ->get();

                return $lisAlumno;
    }
    
    public static function Reporte_psico() {        
          Excel::create('Psico ', function($excel) {
          $excel->sheet('reporte Psicologico', function($sheet) {
          $lGECN = self::Rep_list_psico();
          $sheet->fromArray($lGECN);
          $sheet->setOrientation('landscape');
          });
          })->export('xls');
    }

    /*
     * Reporte RUDE
     */

    public static function Reporte_RUDE() {
        Excel::create('RUDE - ColCristianoColcapirhua', function($excel) {
            $excel->sheet('Rude', function($sheet) {
                $lGECN = self::listAlumnRUDE();
                $sheet->fromArray($lGECN);
                $sheet->setOrientation('landscape');
            });
        })->export('xls');
    }

}
