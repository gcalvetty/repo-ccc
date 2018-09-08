<?php

use Illuminate\Database\Seeder;
use sis_ccc\User;
use sis_ccc\ModeloCCC\RUDE;
use sis_ccc\ModeloCCC\RUDE_1_Gestion;

class AdmTabEst_2PrimA extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $Aula = "A";
    public $Grado = "5"; // Pasa a: 3 Primaria

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
        // 2 Primaria A
        factory(User::class)->create([
            'ape_paterno' => 'Ancasi',
            'ape_materno' => 'Quispe',
            'nombre' => 'Jesus Emanuel',
            'email' => 'aq_jesus@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '40900025201380',
            'fec_nac' => '2009-04-10',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Borda',
            'ape_materno' => 'Romero',
            'nombre' => 'Leonardo Carlos',
            'email' => 'br_leonardo@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520143230',
            'fec_nac' => '2008-10-23',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Cabero',
            'ape_materno' => 'Acosta',
            'nombre' => 'Alejandro',
            'email' => 'ca_alejandro@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809803332013236',
            'fec_nac' => '2009-04-24',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Calvetty',
            'ape_materno' => 'Escobar',
            'nombre' => 'Andrés',
            'email' => 'ce_andres@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8098036520139341',
            'fec_nac' => '2008-07-15',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Castellon',
            'ape_materno' => 'Valda',
            'nombre' => 'Mauro Guido',
            'email' => 'cv_mauro@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520143044',
            'fec_nac' => '2009-06-12',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Claure',
            'ape_materno' => 'Flores',
            'nombre' => 'Fernanda Lucia',
            'email' => 'cf_fernanda@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '80980029201399',
            'fec_nac' => '2008-10-28',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Coca',
            'ape_materno' => 'Ayaviri',
            'nombre' => 'Lucas Brad',
            'email' => 'ca_lucas@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252013160',
            'fec_nac' => '2009-04-03',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Colque',
            'ape_materno' => 'Jimenez',
            'nombre' => 'Mike Denis',
            'email' => 'cj_mike@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '40900025201374',
            'fec_nac' => '2009-04-14',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Condori',
            'ape_materno' => 'Colque',
            'nombre' => 'Daniel Snaider',
            'email' => 'cc_daniel@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252013267',
            'fec_nac' => '2009-06-08',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Condori',
            'ape_materno' => 'Triveño',
            'nombre' => 'Joel Wilmer',
            'email' => 'ct_joel@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '40900025201397',
            'fec_nac' => '2009-11-10',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Daza',
            'ape_materno' => 'Adorno',
            'nombre' => 'Sofia Helena',
            'email' => 'da_sofia@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '40900025201345',
            'fec_nac' => '2009-03-17',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Encinas',
            'ape_materno' => 'Cahuaya',
            'nombre' => 'Nicol Abigail',
            'email' => 'ec_nicol@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252013197',
            'fec_nac' => '2009-02-11',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Estrada',
            'ape_materno' => 'Choque',
            'nombre' => 'Juan Jhoel',
            'email' => 'ec_juan@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520153367',
            'fec_nac' => '2009-06-25',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Gambo',
            'ape_materno' => 'Hinojosa',
            'nombre' => 'Jose Santiago',
            'email' => 'gh_jose@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '80980323201395',
            'fec_nac' => '2008-08-24',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Jacaya',
            'ape_materno' => 'Hinojosa',
            'nombre' => 'Jose Carlos',
            'email' => 'jh_jose@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8098032320137275',
            'fec_nac' => '2008-09-29',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Jimenez',
            'ape_materno' => 'Huanca',
            'nombre' => 'Fabiana Nicole',
            'email' => 'jh_fabiana@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809804102013316',
            'fec_nac' => '2008-11-05',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Lazcano',
            'ape_materno' => 'Aruquipa',
            'nombre' => 'Keyla Litzi',
            'email' => 'la_keyla@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252014299A',
            'fec_nac' => '2009-06-28',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Limachi',
            'ape_materno' => 'Ramirez',
            'nombre' => 'Judith Vania',
            'email' => 'lr_judith@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4073033520143399',
            'fec_nac' => '2008-08-18',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Maita',
            'ape_materno' => 'Caceres',
            'nombre' => 'Adriana',
            'email' => 'mc_adriana@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '5090004620132145',
            'fec_nac' => '2008-10-27',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Maldonado',
            'ape_materno' => 'Quinteros',
            'nombre' => 'Victor Matias',
            'email' => 'mq_victor@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809000842013230',
            'fec_nac' => '2009-06-26',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Mamani',
            'ape_materno' => 'Rojas',
            'nombre' => 'Katherin Adelaida',
            'email' => 'mr_katherin@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809803662013237',
            'fec_nac' => '2009-01-22',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Pacci',
            'ape_materno' => 'Coca',
            'nombre' => 'Samuel Sebastian',
            'email' => 'pc_samuel@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252013181',
            'fec_nac' => '2009-05-06',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Rocha',
            'ape_materno' => 'Arriaran',
            'nombre' => 'Ian Ramses',
            'email' => 'ra_ian@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809000842013293',
            'fec_nac' => '2009-06-20',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Rodriguez',
            'ape_materno' => 'Alfaro',
            'nombre' => 'Alejandro Carlos',
            'email' => 'ra_alejandro@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809805552013196',
            'fec_nac' => '2008-07-18',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        factory(User::class)->create([
            'ape_paterno' => 'Saavedra',
            'ape_materno' => 'Celiz',
            'nombre' => 'Pablo Hernan',
            'email' => 'sc_pablo@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '80900087201373',
            'fec_nac' => '2009-02-22',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Sanzetenea',
            'ape_materno' => 'Zambrana',
            'nombre' => 'Suri Daniela',
            'email' => 'sz_suri@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252013176',
            'fec_nac' => '2009-04-26',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Sotomayor',
            'ape_materno' => 'Albarracin',
            'nombre' => 'Kae',
            'email' => 'sa_kae@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520161046',
            'fec_nac' => '2008-06-17',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Torrez',
            'ape_materno' => 'Peñaranda',
            'nombre' => 'Juan Rene Dymitri',
            'email' => 'tp_juan@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '40900025201339',
            'fec_nac' => '2009-06-17',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Villaroel',
            'ape_materno' => 'Arandia',
            'nombre' => 'Constanza Valeria',
            'email' => 'va_constanza@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '80900003201311545',
            'fec_nac' => '2009-04-28',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Villegas',
            'ape_materno' => 'Vega',
            'nombre' => 'Santiago',
            'email' => 'vv_santiago@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809000992013245',
            'fec_nac' => '2009-04-28',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Zapata',
            'ape_materno' => 'Cespedes',
            'nombre' => 'Valeria Mildred',
            'email' => 'zc_valeria@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809804392013253',
            'fec_nac' => '2008-11-05',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Zenteno',
            'ape_materno' => 'Aymara',
            'nombre' => 'Jherack Omar ',
            'email' => 'za_jherack@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520143097',
            'fec_nac' => '2009-02-02',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
    }

}
