<?php

namespace sis_ccc\Http\Controllers\Inscripcion;

use Illuminate\Http\Request;
use sis_ccc\Http\Controllers\Controller;

use sis_ccc\Mail\inscripcion as inscrEmail;
use Illuminate\Support\Facades\Mail;
use Validator;
use sis_ccc\User;
use sis_ccc\ModeloCCC\RUDE;
use sis_ccc\libreriaCCC\fncCCC;
use Carbon\Carbon; // --- para manejar fechas
use Illuminate\Support\Facades\DB;


use sis_ccc\libreriaCCC\queryCCC as qGECN;

class inscripcionController extends Controller
{
    
    public $emailGECN = "_";    
    public $idAlumno = 01000111010001010100001101001110;

    public function index() {        
        return view('layouts_inscripcion/view_inscripcion', [
            'iniciar' => true ,
        ]);
    }
        
    public function nuevoAlum() {        
        return view('layouts_inscripcion/view_inscripcion_nuevo', [            
        ]);
    }
    
    public function antiguoAlum(Request $request) {
        $sql = new qGECN;
        $lGECN = $sql::listAlumnGestionAnterior($request);        
        return view('layouts_inscripcion/view_inscripcion_antiguo', [
            'iniciar' => false ,
            'Lista' => $lGECN,
        ]);
    }
    
    /*
     * Reportes de Alumnos x Nivel
     */   
    public function ReporteNivel(Request $request){
        $sql = new qGECN;
        $sql::Reporte_Alumnos($request);                
    }

    
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
     * Validamos Datos
     */

    protected function validator(array $data) {
        $data["email"] = $this->emailGECN["email"];
        $vGECN = Validator::make($data, [
                    // ---- Inscripcion Tag1 ---- required|min:5|max:50
                    'nombre' => 'required|min:3|max:50',
                    'ape_paterno' => 'required|min:3|max:50',
                    'ape_materno' => 'required|min:3|max:50',
                    'sexo' => 'required|in:,F,M',
                    'email' => 'required|unique:users',
                        // ----------------
        ]);
        return $vGECN;
    }

    /*
     * Crear Email Personalizado
     */

    public function createEmail($data) {
        $d = new fncCCC;
        $mit = rand(10, 99); //date("d_G_i_s"); //date("D M j G:i:s T Y");  // Sat Mar 10 17:16:18 MST 2001        
        $usuEmail = "_";
        $firPaterno = substr(strtolower($d->CorrDatInsc($data['ape_paterno'])), 0, 1);
        $firMaterno = substr(strtolower($d->CorrDatInsc($data['ape_materno'])), 0, 1);
        $firNombre = explode(" ", strtolower($d->CorrDatInsc($data['nombre'])));
        $DomEmail = "ccc.edu.bo";
        if (count($firNombre) >= 2) {
            $usuEmail = substr($firNombre[1], 0, 1) . "_" . $firNombre[0];
        } else {
            $usuEmail .= $firNombre[0];
        }
        
        $this->emailGECN = array("email" => $firPaterno . $firMaterno . $usuEmail .$mit. "@" . $DomEmail,
                                 "clv" =>"ccc_estudiante"
                                );        
    }

    /*
     * Almacenar Usuario
     */

    protected function createUser(array $data) {
        $d = new fncCCC;
        $vGECN = User::create([
                    'nombre' => $data['nombre'],
                    'ape_paterno' => $d->CorrDatInsc($data['ape_paterno']),
                    'ape_materno' => $d->CorrDatInsc($data['ape_materno']),
                    'email' => $this->emailGECN["email"],
                    'password' => bcrypt($this->emailGECN["clv"]), //bcrypt('12344_CCC'),
                    'tipo_Usu' => 'Est_ccc',
                    'libreta' =>'',
                    'activo' => true,
                    'verf_token' => str_random(40),
                    'rememberToken' => '',
        ]);
        return $vGECN;
    }

    /*
     * Almacenar RUDE
     */

    protected function RegRUDE(array $data) {
        $dateBD = $this->setDateAttribute($data['fec_nac']);
        $dt = Carbon::now();
        $cD = new fncCCC;       // Para Correguir los datos

        if ((!isset($data['num_doc'])) || ($data['num_doc']=='')) {
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
        if($data['frec_inter_est']==""){
            $data['frec_inter_est'] = 0;
        }

        if(!isset($data['tip_doc'])){
            $data['tip_doc'] = 'Ninguno';
        }
        
        if ($data['tip_doc'] == "") {
            $data['tip_doc'] = 'Ninguno';
        }
        
        
        if ($data['idihab1_est'] == "") {
            $data['idihab1_est'] = 'Ninguno';
        }
        if ($data['idihab2_est'] == "") {
            $data['idihab2_est'] = 'Ninguno';
        }
        if ($data['idihab3_est'] == "") {
            $data['idihab3_est'] = 'Ninguno';
        }

        if (!isset($data['discp'])) {
            $data['discp'] = 0;
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
        DB::table('rude')->insert(
                ['user_id' => $this->idAlumno,
                    'cod_rude' => $data['cod_rude'],
                    'tip_doc' => $cD->CorrDatInsc($data['tip_doc']),
                    'num_doc' => $cD->CorrDatInsc($data['num_doc']),
                    'fec_nac' => $dateBD, // '2010-01-01',
                    'sexo' => $data['sexo'],
                    'estado' => 'Inscrito',
                    'rue_num' => $cD->CorrDatInsc($data['rue_num']),
                    'rue_nom' => $data['rue_nom'],
                ]
        );

        
        DB::Table('rude_1_gestion')->insert(
                ['user_id' => $this->idAlumno,
                    'gst_gestion' => $dt->year,
                    'gst_grd_escolar' => $data['optCurso'],
                    'gst_aula' => 'A',
                ]
        );

        DB::Table('rude_2_lug_nac')->insert(
                ['user_id' => $this->idAlumno,
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

        DB::Table('rude_4_direccion')->insert(
                ['user_id' => $this->idAlumno,
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

        DB::Table('rude_5_1_idioma')->insert(
                ['user_id' => $this->idAlumno,
                    'idi_habl' => $data['idi_est'],
                    'idi_habl1' => $data['idihab1_est'],
                    'idi_habl2' => $data['idihab2_est'],
                    'idi_habl3' => $data['idihab3_est'],
                    'idi_nacion' => $data['pert_est'],
                    'idi_nacion2' => $data['pert_est_otro'],
                ]
        );

        DB::Table('rude_5_2_salud')->insert(
                ['user_id' => $this->idAlumno,
                    'sal_centro' => $data['exit_salud_est'],
                    'sal_frec' => $data['vec_salud_est'],
                    'sal_disc1' => $data['dis1'],
                    'sal_disc2' => $data['dis2'],
                    'sal_disc3' => $data['dis3'],
                    'sal_adq' => $data['discp'],
                    'sal_discOtro' => $cD->CorrDatInsc($data['discp_otro']),
                ]
        );


        DB::Table('rude_5_3_serbasicos')->insert(
                ['user_id' => $this->idAlumno,
                    'ser_agua' => $data['ser_agua'],
                    'ser_energia' => $data['elec_est'],
                    'ser_letrina' => $data['water_est'],
                ]
        );

        DB::Table('rude_5_4_actividades')->insert(
                ['user_id' => $this->idAlumno,
                    'act_realizada' => $data['trab_est'],
                    'act_diastrab' => $data['dia_trab_est'],
                    'recpago' => $data['rec_pag_est'],
                ]
        );

        DB::Table('rude_5_5_internet')->insert(
                ['user_id' => $this->idAlumno,
                    'int_lug' => $data['internet_est'],
                    'int_frecuencia' => $data['frec_inter_est'],
                ]
        );

        DB::Table('rude_5_6_transporte')->insert(
                ['user_id' => $this->idAlumno,
                    'trs_como' => $data['transp_esp'],
                    'trs_otro' =>  $cD->CorrDatInsc($data['trans_otro_est']),
                    'trs_tiempo' => $data['transp_tiempo'],
                ]
        );        

        DB::Table('rude_6_tutor')->insert(
                ['user_id' => $this->idAlumno,
                    'ci_tut' =>  $cD->CorrDatInsc($data['ci_tut']),
                    'ape_tut' =>  $cD->CorrDatInsc($data['ape_tut']),
                    'nom_tut' =>  $cD->CorrDatInsc($data['nom_tut']),
                    'idim_tut' =>  $data['idim_tut'],
                    'ocp_tut' =>  $cD->CorrDatInsc($data['ocp_tut']),
                    'grd_tut' =>  $cD->CorrDatInsc($data['grd_tut']),
                    'paren_tut' =>  $cD->CorrDatInsc($data['paren_tut']),
                    'ci_madre' =>  $cD->CorrDatInsc($data['ci_madre']),
                    'ape_madre' =>  $cD->CorrDatInsc($data['ape_madre']),
                    'nom_madre' =>  $cD->CorrDatInsc($data['nom_madre']),
                    'idim_madre' => $data['idim_madre'],
                    'ocp_madre' =>  $cD->CorrDatInsc($data['ocp_madre']),
                    'grd_madre' =>  $cD->CorrDatInsc($data['grd_madre']),
                ]
        );
    }
    
    public function ImpRegAlumno(RUDE $alumno) {
        $datos = $alumno;
        $id = $datos['user_id'];
        
        // ---- Modificar formato de fecha 
        $fechaBD = date_create($datos['fec_nac']);
        $datos['fec_nac'] = explode("-", date_format($fechaBD, 'd-m-Y'));

        // ---- Obtener los datos del Alumno
        $alum = DB::table('users')->select('ape_paterno', 'ape_materno', 'nombre', 'created_at as fec_reg')->where('id', $id)->first();
        $gestion = DB::table('rude_1_gestion')->where('user_id', $id)->first();
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
        
        return view('layouts_imprimir/view_rude_imprimir', ['datos' => $datos,
            'gestion' => collect($gestion),
            'lugnac' => collect($lug_nac),
            'dir' => collect($dir),
            'idioma' => collect($idioma),
            'salud' => collect($salud),
            'serBas' => collect($serBas),
            'activ' => collect($activ),
            'net' => collect($net),
            'transp' => collect($transp),
            'tutor' => collect($tutor)
        ]);
    }

    /*
     * Registrar Alumno
     */

    public function RegAlumno(Request $request) {        
        $data = $request->all();
        $this->createEmail($data);
        $this->validator($data)->validate();

        // --- Creamos un nuevo usuario --- Tip: Estudiante
        $user = $this->createUser($data);
        $this->idAlumno = $user->id;

        // --- Registramos Datos ----
        $this->RegRUDE($data);
        $nombre = $user->ape_paterno.' '.$user->ape_materno.' '.$user->nombre;
        
        
        return redirect('inscripcion/nuevo-alumno')->with([
            'status' => 'Se Registro al Estudiante!!!',
            'alumno' => $user->id,
            'iniciar' => true ,
            'nombre' => ucwords(strtolower($nombre)), 
        ]);
    }
    

    /*
     * Enviar EMAIL
     */

    public function envEmail(Request $request) {

        $deEmail = $request->all();
        $nomcomp = $deEmail['nombre'] . ' - ' . $deEmail['ape_paterno'] . ' - ' . $deEmail['ape_materno'];
        $this->validator($deEmail)->validate();
        //to -> para -> config('mail.from.address')
        //->cc($deEmail['email'])        
        Mail::to('gcalvetty@gmail.com', 'gecn')
                ->send(new inscrEmail($request->all()));
        return redirect('/inscripcion')->with('status', 'Reserva Enviada!!!');
    }
    
    
}
