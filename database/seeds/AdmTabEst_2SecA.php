<?php

use Illuminate\Database\Seeder;
use sis_ccc\User;
use sis_ccc\ModeloCCC\RUDE;
use sis_ccc\ModeloCCC\RUDE_1_Gestion;

class AdmTabEst_2SecA extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $Aula = "A";
    public $Grado = "3"; // Pasa a: 1 Primaria
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
        // 2da Sección A
        factory(User::class)->create([
            'ape_paterno' => 'Bedoya',
            'ape_materno' => 'Real',
            'nombre' => 'Melany Valeria',
            'email' => 'br_melany@ccc.edu.bo',]); 
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520152614',
            'fec_nac' => '2011-06-02',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Cabrera',
            'ape_materno' => 'Arebalo',
            'nombre' => 'Matias Gadiel',
            'email' => 'ca_matias@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520152796',
            'fec_nac' => '2011-06-20',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Cejas',
            'ape_materno' => 'Sanchez',
            'nombre' => 'Misael Edwin',
            'email' => 'cs_misael@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '40900025201662487',
            'fec_nac' => '2011-06-18',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Choque',
            'ape_materno' => 'Blanco',
            'nombre' => 'neymar Fabricio',
            'email' => 'cb_neymar@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520152758',
            'fec_nac' => '2011-06-14',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Cordero',
            'ape_materno' => 'Flores',
            'nombre' => 'Ethan Samuel',
            'email' => 'cf_ethan@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520154579',
            'fec_nac' => '2011-06-20',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
               
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Delgadillo',
            'ape_materno' => 'Condori',
            'nombre' => 'Sheyla Eipril',
            'email' => 'dc_sheyla@ccc.edu.bo',]); 
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252016023',
            'fec_nac' => '2011-05-12',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Espinoza',
            'ape_materno' => 'Ferrufino',
            'nombre' => 'Matias',
            'email' => 'ef_matias@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520153075',
            'fec_nac' => '2010-08-21',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Gamboa',
            'ape_materno' => 'Hinojosa',
            'nombre' => 'Lucia Alejandra',
            'email' => 'gh_lucia@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520152997',
            'fec_nac' => '2011-05-16',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Gonzales',
            'ape_materno' => 'Quispe',
            'nombre' => 'Fernanda',
            'email' => 'gq_fernanda@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8073075920151274',
            'fec_nac' => '2010-07-30',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Jimenez',
            'ape_materno' => 'Terceros',
            'nombre' => 'Saul Gabriel',
            'email' => 'jt_saul@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520153037',
            'fec_nac' => '2010-12-27',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Laura',
            'ape_materno' => 'Barrios',
            'nombre' => 'Jhostin Roger',
            'email' => 'lb_jhostin@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520152959',
            'fec_nac' => '2011-02-02',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Lazcano',
            'ape_materno' => 'Aruquipa',
            'nombre' => 'Jheick Albert',
            'email' => 'la_jheick@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520154731',
            'fec_nac' => '2011-05-18',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Lazcano',
            'ape_materno' => 'Mamani',
            'nombre' => 'Ariel Yostin',
            'email' => 'lm_ariel@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252015282A',
            'fec_nac' => '2011-06-14',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Mamani',
            'ape_materno' => 'Soto',
            'nombre' => 'Jherson Mateo',
            'email' => 'ms_jherson@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000222015446A',
            'fec_nac' => '2011-04-24',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Meneses',
            'ape_materno' => 'Aguilar',
            'nombre' => 'Zaret Fernanda',
            'email' => 'ma_zaret@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520153056',
            'fec_nac' => '2010-11-19',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Peredo',
            'ape_materno' => 'Caspa',
            'nombre' => 'natalia Maria',
            'email' => 'pc_natalia@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '40900025201629861',
            'fec_nac' => '2011-04-10',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Perez',
            'ape_materno' => 'Salguero',
            'nombre' => 'Lexi Esmeralda',
            'email' => 'ps_lexi@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520152978',
            'fec_nac' => '2010-11-10',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Pinto',
            'ape_materno' => 'Arce',
            'nombre' => 'Edwin Ananias',
            'email' => 'pa_edwin@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520152944',
            'fec_nac' => '2010-12-15',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Rocha',
            'ape_materno' => 'Albarracin',
            'nombre' => 'Briana',
            'email' => 'ra_briana@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520168055',
            'fec_nac' => '2011-06-14',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Salazar',
            'ape_materno' => 'Clares',
            'nombre' => 'Zusel Paola',
            'email' => 'sc_zusel@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520152834',
            'fec_nac' => '2011-05-19',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Sandoval',
            'ape_materno' => 'Almanza',
            'nombre' => 'Alan Fabricio',
            'email' => 'sa_alan@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520153018',
            'fec_nac' => '2011-04-01',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Siles',
            'ape_materno' => 'Conde',
            'nombre' => 'Jhery',
            'email' => 'sc_jhery@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '608901172015201',
            'fec_nac' => '2011-04-01',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
    }

}
