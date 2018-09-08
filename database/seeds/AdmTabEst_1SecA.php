<?php

use Illuminate\Database\Seeder;
use sis_ccc\User;
use sis_ccc\ModeloCCC\RUDE;
use sis_ccc\ModeloCCC\RUDE_1_Gestion;
use sis_ccc\ModeloCCC\RUDE_2_Lug_Nac;

class AdmTabEst_1SecA extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $Aula = "A";
    public $Grado = "2"; // Pasa a: 2 Seccion

    public function addGestion() {
        $user = User::where('tipo_Usu', 'Est_ccc')
                        ->orderBy('id', 'desc')->first();
        factory(RUDE_1_Gestion::class)->create([
            'user_id' => $user->id,
            'gst_aula' => $this->Aula,
            'gst_grd_escolar' => $this->Grado,
        ]);
        return $user->id;
    }

    public function run() {
        // 1 Sección A
        factory(User::class)->create([
            'ape_paterno' => 'Ascarrunz',
            'ape_materno' => 'Gonzales',
            'nombre' => 'Ester',
            'email' => 'ag_ester@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252016007',
            'fec_nac' => '2011-11-28',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        factory(RUDE_2_Lug_Nac::class)->create([
            'user_id' => $id,
            'ln_pais' => 'Bolivia',
            'ln_depa' => 'Cochabamba',
            'ln_prov' => 'Cercado',
            'ln_loc' => 'Cochabamba',
            'cn_oficialia' => 0,
            'cn_numlibro' => 0,
            'cn_numpartida' => 0,
            'cn_numfolio' => 0,
        ]);




        factory(User::class)->create([
            'ape_paterno' => 'Ayma',
            'ape_materno' => 'Garcia',
            'nombre' => 'Jorgue Santiago',
            'email' => 'ag_jorgue@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252016003',
            'fec_nac' => '2012-06-27',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        factory(RUDE_2_Lug_Nac::class)->create([
            'user_id' => $id,
            'ln_pais' => 'Bolivia',
            'ln_depa' => 'Cochabamba',
            'ln_prov' => 'Quillacollo',
            'ln_loc' => 'Tiquipaya',
            'cn_oficialia' => 0,
            'cn_numlibro' => 0,
            'cn_numpartida' => 0,
            'cn_numfolio' => 0,
        ]);



        factory(User::class)->create([
            'ape_paterno' => 'Basoalto',
            'ape_materno' => 'Condori',
            'nombre' => 'Jhoel',
            'email' => 'bc_jhoel@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252016025',
            'fec_nac' => '2011-07-06',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        factory(RUDE_2_Lug_Nac::class)->create([
            'user_id' => $id,
            'ln_pais' => 'Boliva',
            'ln_depa' => 'Cochabamba',
            'ln_prov' => 'Cercado',
            'ln_loc' => 'Cochabamba',
            'cn_oficialia' => 0,
            'cn_numlibro' => 0,
            'cn_numpartida' => 0,
            'cn_numfolio' => 0,
        ]);


        factory(User::class)->create([
            'ape_paterno' => 'Bolivar',
            'ape_materno' => 'Caballero',
            'nombre' => 'Lucas Rafael',
            'email' => 'bc_lucas@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252016009',
            'fec_nac' => '2011-12-24',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        factory(RUDE_2_Lug_Nac::class)->create([
            'user_id' => $id,
            'ln_pais' => 'Bolivia',
            'ln_depa' => 'Cochabamba',
            'ln_prov' => 'Cercado',
            'ln_loc' => 'Cochabamba',
            'cn_oficialia' => 0,
            'cn_numlibro' => 0,
            'cn_numpartida' => 0,
            'cn_numfolio' => 0,
        ]);



        factory(User::class)->create([
            'ape_paterno' => 'Cabrera',
            'ape_materno' => 'Villaroel',
            'nombre' => 'Maria Isabella',
            'email' => 'cv_maria@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '40900025201655167',
            'fec_nac' => '2012-03-08',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        factory(RUDE_2_Lug_Nac::class)->create([
            'user_id' => $id,
            'ln_pais' => 'Bolivia',
            'ln_depa' => '',
            'ln_prov' => '',
            'ln_loc' => '',
            'cn_oficialia' => 0,
            'cn_numlibro' => 0,
            'cn_numpartida' => 0,
            'cn_numfolio' => 0,
        ]);



        factory(User::class)->create([
            'ape_paterno' => 'Caero',
            'ape_materno' => 'Paco',
            'nombre' => 'Giulia',
            'email' => 'cp_giulia@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '40900025201612504',
            'fec_nac' => '2011-10-31',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        factory(RUDE_2_Lug_Nac::class)->create([
            'user_id' => $id,
            'ln_pais' => 'Bolivia',
            'ln_depa' => '',
            'ln_prov' => '',
            'ln_loc' => '',
            'cn_oficialia' => 0,
            'cn_numlibro' => 0,
            'cn_numpartida' => 0,
            'cn_numfolio' => 0,
        ]);



        factory(User::class)->create([
            'ape_paterno' => 'Choque',
            'ape_materno' => 'Lopez',
            'nombre' => 'Erick Rafael',
            'email' => 'el_erick@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252016008',
            'fec_nac' => '2011-11-16',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        factory(RUDE_2_Lug_Nac::class)->create([
            'user_id' => $id,
            'ln_pais' => 'Bolivia',
            'ln_depa' => 'Cochabamba',
            'ln_prov' => 'Quillacollo',
            'ln_loc' => 'Colcapirhua',
            'cn_oficialia' => 0,
            'cn_numlibro' => 0,
            'cn_numpartida' => 0,
            'cn_numfolio' => 0,
        ]);


        factory(User::class)->create([
            'ape_paterno' => 'Coria',
            'ape_materno' => 'Russel',
            'nombre' => 'Jhon Henry',
            'email' => 'cr_jhon@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252016006',
            'fec_nac' => '2011-12-06',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        factory(RUDE_2_Lug_Nac::class)->create([
            'user_id' => $id,
            'ln_pais' => 'Bolivia',
            'ln_depa' => 'Cochabamba',
            'ln_prov' => 'Quillacollo',
            'ln_loc' => 'Quillacollo',
            'cn_oficialia' => 0,
            'cn_numlibro' => 0,
            'cn_numpartida' => 0,
            'cn_numfolio' => 0,
        ]);


        factory(User::class)->create([
            'ape_paterno' => 'Crespo',
            'ape_materno' => 'Calle',
            'nombre' => 'Natania',
            'email' => 'cc_natania@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252016015',
            'fec_nac' => '2011-08-27',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        factory(RUDE_2_Lug_Nac::class)->create([
            'user_id' => $id,
            'ln_pais' => 'Bolivia',
            'ln_depa' => 'Cochabamba',
            'ln_prov' => 'Cercado',
            'ln_loc' => 'Quillacollo',
            'cn_oficialia' => 0,
            'cn_numlibro' => 0,
            'cn_numpartida' => 0,
            'cn_numfolio' => 0,
        ]);
        



        factory(User::class)->create([
            'ape_paterno' => 'Cruz',
            'ape_materno' => 'Rosas',
            'nombre' => 'Luan Gustavo',
            'email' => 'cr_luan@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809805202016071',
            'fec_nac' => '2012-03-14',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        factory(RUDE_2_Lug_Nac::class)->create([
            'user_id' => $id,
            'ln_pais' => 'Brasil',
            'ln_depa' => '',
            'ln_prov' => '',
            'ln_loc' => '',
            'cn_oficialia' => 0,
            'cn_numlibro' => 0,
            'cn_numpartida' => 0,
            'cn_numfolio' => 0,
        ]);



        factory(User::class)->create([
            'ape_paterno' => 'Equise',
            'ape_materno' => 'Álvarez',
            'nombre' => 'Isabel Alison',
            'email' => 'ea_isabel@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252016012',
            'fec_nac' => '2012-01-02',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        factory(RUDE_2_Lug_Nac::class)->create([
            'user_id' => $id,
            'ln_pais' => 'Bolivia',
            'ln_depa' => 'Cochabamba',
            'ln_prov' => 'Cercado',
            'ln_loc' => 'Cochabamba',
            'cn_oficialia' => 0,
            'cn_numlibro' => 0,
            'cn_numpartida' => 0,
            'cn_numfolio' => 0,
        ]);


        factory(User::class)->create([
            'ape_paterno' => 'Escobar',
            'ape_materno' => 'Ayala',
            'nombre' => 'Maria Rene',
            'email' => 'ea_maria@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252016005',
            'fec_nac' => '2011-12-09',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        factory(RUDE_2_Lug_Nac::class)->create([
            'user_id' => $id,
            'ln_pais' => 'Bolivia',
            'ln_depa' => 'Cochabamba',
            'ln_prov' => 'Quillacollo',
            'ln_loc' => 'Colcapirhua',
            'cn_oficialia' => 0,
            'cn_numlibro' => 0,
            'cn_numpartida' => 0,
            'cn_numfolio' => 0,
        ]);


        factory(User::class)->create([
            'ape_paterno' => 'Flores',
            'ape_materno' => 'Gutiérrez',
            'nombre' => 'Jhon Alex',
            'email' => 'fg_jhon@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252016024',
            'fec_nac' => '2011-10-14',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        factory(RUDE_2_Lug_Nac::class)->create([
            'user_id' => $id,
            'ln_pais' => 'Bolivia',
            'ln_depa' => 'Cochabamba',
            'ln_prov' => 'Cercado',
            'ln_loc' => 'Cochabamba',
            'cn_oficialia' => 0,
            'cn_numlibro' => 0,
            'cn_numpartida' => 0,
            'cn_numfolio' => 0,
        ]);


        factory(User::class)->create([
            'ape_paterno' => 'Laura',
            'ape_materno' => 'Barrios',
            'nombre' => 'Fernanda Gissel',
            'email' => 'lb_fernanda@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252016014',
            'fec_nac' => '2012-05-26',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        factory(RUDE_2_Lug_Nac::class)->create([
            'user_id' => $id,
            'ln_pais' => 'Bolivia',
            'ln_depa' => 'Cochabamba',
            'ln_prov' => 'Quillacollo',
            'ln_loc' => 'Quillacollo',
            'cn_oficialia' => 0,
            'cn_numlibro' => 0,
            'cn_numpartida' => 0,
            'cn_numfolio' => 0,
        ]);



        factory(User::class)->create([
            'ape_paterno' => 'Mendoza',
            'ape_materno' => 'Herbas',
            'nombre' => 'Benjamin Adalid',
            'email' => 'mh_Benjamin@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520162349',
            'fec_nac' => '2012-05-13',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        factory(RUDE_2_Lug_Nac::class)->create([
            'user_id' => $id,
            'ln_pais' => 'Argentina',
            'ln_depa' => '',
            'ln_prov' => '',
            'ln_loc' => '',
            'cn_oficialia' => 0,
            'cn_numlibro' => 0,
            'cn_numpartida' => 0,
            'cn_numfolio' => 0,
        ]);

        
        
        factory(User::class)->create([
            'ape_paterno' => 'Mendoza',
            'ape_materno' => 'Penafiel',
            'nombre' => 'Emanuel Marcelo',
            'email' => 'mp_Benjamin@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252016010',
            'fec_nac' => '2012-03-20',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        factory(RUDE_2_Lug_Nac::class)->create([
            'user_id' => $id,
            'ln_pais' => 'Argentina',
            'ln_depa' => '',
            'ln_prov' => '',
            'ln_loc' => '',
            'cn_oficialia' => 0,
            'cn_numlibro' => 0,
            'cn_numpartida' => 0,
            'cn_numfolio' => 0,
        ]);




        factory(User::class)->create([
            'ape_paterno' => 'Ortuño',
            'ape_materno' => 'Rojas',
            'nombre' => 'Luciana Isabel',
            'email' => 'or_luciana_isabel@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252016013',
            'fec_nac' => '2011-08-15',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        factory(RUDE_2_Lug_Nac::class)->create([
            'user_id' => $id,
            'ln_pais' => 'Bolivia',
            'ln_depa' => 'Cochabamba',
            'ln_prov' => 'Cercado',
            'ln_loc' => 'Cochabamba',
            'cn_oficialia' => 0,
            'cn_numlibro' => 0,
            'cn_numpartida' => 0,
            'cn_numfolio' => 0,
        ]);

        


        factory(User::class)->create([
            'ape_paterno' => 'Patiño',
            'ape_materno' => 'Vargas',
            'nombre' => 'Hector Miguel',
            'email' => 'pv_hector@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252016020',
            'fec_nac' => '2012-02-22',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        factory(RUDE_2_Lug_Nac::class)->create([
            'user_id' => $id,
            'ln_pais' => 'Bolivia',
            'ln_depa' => 'Cochabamba',
            'ln_prov' => 'Cercado',
            'ln_loc' => 'Cochabamba',
            'cn_oficialia' => 0,
            'cn_numlibro' => 0,
            'cn_numpartida' => 0,
            'cn_numfolio' => 0,
        ]);

        



        factory(User::class)->create([
            'ape_paterno' => 'Rios',
            'ape_materno' => 'Bustos',
            'nombre' => 'Raul Alejandro',
            'email' => 'rb_raul@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252016011',
            'fec_nac' => '2012-01-08',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        factory(RUDE_2_Lug_Nac::class)->create([
            'user_id' => $id,
            'ln_pais' => 'Bolivia',
            'ln_depa' => 'Cochabamba',
            'ln_prov' => 'Cercado',
            'ln_loc' => 'Cochabamba',
            'cn_oficialia' => 0,
            'cn_numlibro' => 0,
            'cn_numpartida' => 0,
            'cn_numfolio' => 0,
        ]);

        factory(User::class)->create([
            'ape_paterno' => 'Zapata',
            'ape_materno' => 'Cespedes',
            'nombre' => 'Valentina Tamara',
            'email' => 'zc_valentina@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252016016',
            'fec_nac' => '2012-05-30',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        factory(RUDE_2_Lug_Nac::class)->create([
            'user_id' => $id,
            'ln_pais' => 'Bolivia',
            'ln_depa' => 'Cochabamba',
            'ln_prov' => 'Cercado',
            'ln_loc' => 'Cochabamba',
            'cn_oficialia' => 0,
            'cn_numlibro' => 0,
            'cn_numpartida' => 0,
            'cn_numfolio' => 0,
        ]);

    }

}
