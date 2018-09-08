<?php

use Illuminate\Database\Seeder;
use sis_ccc\User;
use sis_ccc\ModeloCCC\RUDE;
use sis_ccc\ModeloCCC\RUDE_1_Gestion;

class AdmTabEst_5PrimA extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $Aula = "A";
    public $Grado = "8"; // Pasa a: 6 Primaria

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
        //5to de Primaria
        factory(User::class)->create([
            'ape_paterno' => 'Alegre',
            'ape_materno' => 'Choque',
            'nombre' => 'Anahi',
            'email' => 'ac_anahi@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8090001520111136',
            'fec_nac' => '2006-03-04',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Arandia',
            'ape_materno' => 'Peñarrieta',
            'nombre' => 'Kenia Lilian',
            'email' => 'ap_kenia@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809802322011578',
            'fec_nac' => '2006-04-25',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Arce',
            'ape_materno' => 'Justiniano',
            'nombre' => 'Monserrat Camila',
            'email' => 'aj_monserrat@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809000952010391',
            'fec_nac' => '2005-12-18',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Bernal',
            'ape_materno' => 'Cuevas',
            'nombre' => 'Jose Alejandro',
            'email' => 'bc_jose@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520112209',
            'fec_nac' => '2006-04-29',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Callisaya',
            'ape_materno' => 'Antonio',
            'nombre' => 'Raquel',
            'email' => 'ca_raquel@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8098041820112377',
            'fec_nac' => '2006-05-23',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Cayo',
            'ape_materno' => 'Segovia',
            'nombre' => 'Jose Maria',
            'email' => 'cs_jose@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8098032320118038',
            'fec_nac' => '2006-07-25',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Cespedes',
            'ape_materno' => 'Mena',
            'nombre' => 'Gabriela',
            'email' => 'cm_gabriela@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520112319',
            'fec_nac' => '2006-05-23',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Chambilla',
            'ape_materno' => 'Bastos',
            'nombre' => 'Sergio Ruben',
            'email' => 'cb_sergio@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '40900006201424326',
            'fec_nac' => '2006-04-11',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Fuentes',
            'ape_materno' => 'Caballero',
            'nombre' => 'Charlotte Camina',
            'email' => 'fc_charlotte@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8098032320102123',
            'fec_nac' => '2005-11-18',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Gomez',
            'ape_materno' => 'Vargas',
            'nombre' => 'Kelly Sara',
            'email' => 'gv_kelly@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8098033520101605',
            'fec_nac' => '2005-08-05',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Gutiérrez',
            'ape_materno' => 'Arispe',
            'nombre' => 'Samuele Davide',
            'email' => 'ga_samuele@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520162573',
            'fec_nac' => '2006-12-19',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Gutierrez',
            'ape_materno' => 'Panozo',
            'nombre' => 'Valeria Jose',
            'email' => 'gp_valeria@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8090009520101270',
            'fec_nac' => '2006-02-06',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Maita',
            'ape_materno' => 'Caceres',
            'nombre' => 'Shely',
            'email' => 'mc_shely@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '5090004620112652',
            'fec_nac' => '2006-06-08',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Mamani',
            'ape_materno' => 'Farfan',
            'nombre' => 'Ruben',
            'email' => 'mf_ruben@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8137000120113224',
            'fec_nac' => '2006-08-08',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Meneces',
            'ape_materno' => 'Montaño',
            'nombre' => 'Alejandro',
            'email' => 'mm_alejandro@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520112615',
            'fec_nac' => '2005-08-15',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Miranda',
            'ape_materno' => 'Quispe',
            'nombre' => 'Carlos Daniel',
            'email' => 'mq_carlos@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8098032720113820',
            'fec_nac' => '2005-08-10',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Nogales',
            'ape_materno' => 'Rojas',
            'nombre' => 'Nicole',
            'email' => 'nr_nicole@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520102379',
            'fec_nac' => '2006-01-30',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Orosco',
            'ape_materno' => 'Corrales',
            'nombre' => 'Jhissel',
            'email' => 'oc_jhissel@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520162884',
            'fec_nac' => '2006-03-15',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Ortega',
            'ape_materno' => 'Rios',
            'nombre' => 'Mia Nicole',
            'email' => 'or_mia@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090000920118758',
            'fec_nac' => '2006-03-15',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Ovando',
            'ape_materno' => 'Ponce',
            'nombre' => 'Franz Ronald',
            'email' => 'op_franz@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8098036420102626',
            'fec_nac' => '2005-11-26',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Ramallo',
            'ape_materno' => 'Rocha',
            'nombre' => 'Fernando Edson',
            'email' => 'rr_fernando@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002120102756',
            'fec_nac' => '2005-05-18',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Rojas',
            'ape_materno' => 'Mendoza',
            'nombre' => 'Benjamin Alejandro',
            'email' => 'rm_benjamin@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809000992011555',
            'fec_nac' => '2006-02-04',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Torrico',
            'ape_materno' => 'Gallardo',
            'nombre' => 'Jaime Moises',
            'email' => 'tg_jaime@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8098032320092264',
            'fec_nac' => '2004-05-18',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Tuscunibar',
            'ape_materno' => 'Vargas',
            'nombre' => 'Arely Belen',
            'email' => 'tv_arely@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8090008520114356',
            'fec_nac' => '2005-07-07',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Veizaga',
            'ape_materno' => 'Zuazo',
            'nombre' => 'Mijail Isaac',
            'email' => 'vz_mijail@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8098032720104030',
            'fec_nac' => '2006-03-24',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Villanueva',
            'ape_materno' => 'Roca',
            'nombre' => 'Mariana Magda',
            'email' => 'vr_mariana@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '80730235201141345',
            'fec_nac' => '2005-8-13',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Villanueva',
            'ape_materno' => 'Torrez',
            'nombre' => 'Daniela Doris',
            'email' => 'vt_daniela@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '80730235201141353',
            'fec_nac' => '2005-10-27',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Yucra',
            'ape_materno' => 'Vargas',
            'nombre' => 'Luis Gonzalo',
            'email' => 'yv_luis@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8090008520104306',
            'fec_nac' => '2005-11-01',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
    }

}
