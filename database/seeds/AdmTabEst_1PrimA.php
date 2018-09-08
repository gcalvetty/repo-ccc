<?php

use Illuminate\Database\Seeder;
use sis_ccc\User;
use sis_ccc\ModeloCCC\RUDE;
use sis_ccc\ModeloCCC\RUDE_1_Gestion;

class AdmTabEst_1PrimA extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $Aula = "A";
    public $Grado = "4"; // Pasa a: 2 Primaria
    public function addGestion(){       
        $user = User::where('tipo_Usu', 'Est_ccc')
                        ->orderBy('id', 'desc')->first();
        factory(RUDE_1_Gestion::class)->create([
            'user_id' => $user->id,            
            'gst_aula'=> $this->Aula,
            'gst_grd_escolar' => $this->Grado,            
        ]); 
        return $user->id;
    }
    
    public function run() {
        //1ro de Primaria A
        factory(User::class)->create([
            'ape_paterno' => 'Alarcon',
            'ape_materno' => 'Jimenez',
            'nombre' => 'Rodrigo',
            'email' => 'aj_rodrigo@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809803792014886',
            'fec_nac' => '2009-11-30',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Antazana',
            'ape_materno' => 'Herrera',
            'nombre' => 'Ambar Jayda',
            'email' => 'ah_ambar@ccc.edu.bo',]);
        
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8090009920141055',
            'fec_nac' => '2010-02-18',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Castro',
            'ape_materno' => 'Canchari',
            'nombre' => 'Aracely Milagros',
            'email' => 'cc_aracely@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809000142014424',
            'fec_nac' => '2010-06-25',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        factory(User::class)->create([
            'ape_paterno' => 'Copa',
            'ape_materno' => 'Maydana',
            'nombre' => 'Adrian Afner',
            'email' => 'cm_adrian@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520152906',
            'fec_nac' => '2009-10-1',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Cutipa',
            'ape_materno' => 'Paucara',
            'nombre' => 'Deysi',
            'email' => 'cp_deysi@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '506300092015160A',
            'fec_nac' => '2009-08-24',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        factory(User::class)->create([
            'ape_paterno' => 'Dalencar',
            'ape_materno' => 'Guzman',
            'nombre' => 'Matias',
            'email' => 'dg_matias@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809804102014355',
            'fec_nac' => '2009-11-16',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        factory(User::class)->create([
            'ape_paterno' => 'Donaire',
            'ape_materno' => 'Nina',
            'nombre' => 'Juan Alberto',
            'email' => 'dn_juan@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '40900004201429A',
            'fec_nac' => '2010-05-09',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        factory(User::class)->create([
            'ape_paterno' => 'Encinas',
            'ape_materno' => 'Cahuaya',
            'nombre' => 'Saul Rodrigo',
            'email' => 'ec_saul@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520144036',
            'fec_nac' => '2010-06-26',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Frias',
            'ape_materno' => 'Chura',
            'nombre' => 'Joel Matias',
            'email' => 'fc_joel@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520143996',
            'fec_nac' => '2010-06-01',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        factory(User::class)->create([
            'ape_paterno' => 'Guzman',
            'ape_materno' => 'Valencia',
            'nombre' => 'Benjamin Fabrizio',
            'email' => 'gv_benjamin@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809800682015320',
            'fec_nac' => '2010-06-09',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        factory(User::class)->create([
            'ape_paterno' => 'Ichota',
            'ape_materno' => 'Mendoza',
            'nombre' => 'Luz Sharon',
            'email' => 'im_luz@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520144017',
            'fec_nac' => '2010-05-13',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        factory(User::class)->create([
            'ape_paterno' => 'Loza',
            'ape_materno' => 'Morales',
            'nombre' => 'Gissel Isabel',
            'email' => 'lm_gissel@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8098012020141006',
            'fec_nac' => '2008-05-05',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        factory(User::class)->create([
            'ape_paterno' => 'Mamani',
            'ape_materno' => 'Ramos',
            'nombre' => 'Danna Nicole',
            'email' => 'mr_danna@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8098043620143544',
            'fec_nac' => '2010-06-29',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        factory(User::class)->create([
            'ape_paterno' => 'Navarro',
            'ape_materno' => 'Guitierrez',
            'nombre' => 'Iñaki',
            'email' => 'ng_iniaki@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8098032320145963',
            'fec_nac' => '2009-10-22',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        factory(User::class)->create([
            'ape_paterno' => 'Navarro',
            'ape_materno' => 'Guitierrez',
            'nombre' => 'Iñaki',
            'email' => 'ng_iñaki@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8098032320145963',
            'fec_nac' => '2009-10-22',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Nogales',
            'ape_materno' => 'Ayala',
            'nombre' => 'Lucio Dilan',
            'email' => 'na_lucio@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520153223',
            'fec_nac' => '2010-06-20',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        factory(User::class)->create([
            'ape_paterno' => 'Rios',
            'ape_materno' => 'San Miguel',
            'nombre' => 'Cristofer Maquiavelo',
            'email' => 'rs_cristofer@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520143848',
            'fec_nac' => '2009-12-29',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        factory(User::class)->create([
            'ape_paterno' => 'Rojas',
            'ape_materno' => 'Lopez',
            'nombre' => 'Zhary Victoria',
            'email' => 'rl_zhary@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809802632014279',
            'fec_nac' => '2010-05-20',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Santiesteban',
            'ape_materno' => 'magnez',
            'nombre' => 'Aracely Jhulieth',
            'email' => 'sm_aracely@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809000892014320',
            'fec_nac' => '2010-05-31',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Soto',
            'ape_materno' => 'Bustamante',
            'nombre' => 'Andre Leonardo',
            'email' => 'sb_anare@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000062014287',
            'fec_nac' => '2009-11-06',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        factory(User::class)->create([
            'ape_paterno' => 'Torrico',
            'ape_materno' => 'Moreira',
            'nombre' => 'Avril Samantha',
            'email' => 'tm_avril@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8090001520144046',
            'fec_nac' => '2010-05-03',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Torrico',
            'ape_materno' => 'Martinez',
            'nombre' => 'Alejandro Matias',
            'email' => 'tm_alejandro@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252014406A',
            'fec_nac' => '2010-06-22',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Tudela',
            'ape_materno' => 'Cartagena',
            'nombre' => 'Mariana',
            'email' => 'tc_mariana@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8098032320147090',
            'fec_nac' => '2010-02-09',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        factory(User::class)->create([
            'ape_paterno' => 'Ulaque',
            'ape_materno' => 'Bravo',
            'nombre' => 'Margherit Jhemina',
            'email' => 'ub_margherit@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252016021',
            'fec_nac' => '2010-05-02',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        factory(User::class)->create([
            'ape_paterno' => 'Vera',
            'ape_materno' => 'Medrano',
            'nombre' => 'Guanda Maya',
            'email' => 'vm_guanda@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520143958',
            'fec_nac' => '2010-05-22',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        factory(User::class)->create([
            'ape_paterno' => 'Zamora',
            'ape_materno' => 'Guzman',
            'nombre' => 'Leonardo Altair',
            'email' => 'zg_leonardo@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '817302492014472',
            'fec_nac' => '2010-03-29',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
    }

}
