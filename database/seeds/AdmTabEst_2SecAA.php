<?php

use Illuminate\Database\Seeder;
use sis_ccc\User;
use sis_ccc\ModeloCCC\RUDE;
use sis_ccc\ModeloCCC\RUDE_1_Gestion;

class AdmTabEst_2SecAA extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $Aula = "AA";
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
        // 2da Sección AA
        factory(User::class)->create([
            'ape_paterno' => 'Antezana',
            'ape_materno' => 'Herrera',
            'nombre' => 'Daira Nerea',
            'email' => 'ah_daira@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '80900099201549',
            'fec_nac' => '2011-05-06',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        factory(User::class)->create([
            'ape_paterno' => 'Balderrama',
            'ape_materno' => 'Ayllon',
            'nombre' => 'Aleandra Mariel',
            'email' => 'ba_aleandra@ccc.edu.bo',]);
         $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '40900025201681363',
            'fec_nac' => '2011-05-18',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Geronimo',
            'ape_materno' => 'Caspa',
            'nombre' => 'Valeria Samanta',
            'email' => 'gc_valeria_samanta@ccc.edu.bo',]);
         $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809001102015520',
            'fec_nac' => '2011-02-05',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Gongora',
            'ape_materno' => 'Antezana',
            'nombre' => 'Victoria Mishel',
            'email' => 'ga_victoria@ccc.edu.bo',]);
         $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8098036520157601',
            'fec_nac' => '2011-03-11',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Guillen',
            'ape_materno' => 'Mareño',
            'nombre' => 'Juan Daniel',
            'email' => 'gm_juan@ccc.edu.bo',]);
         $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252016019',
            'fec_nac' => '2010-12-02',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Gutierrez',
            'ape_materno' => 'Antezana',
            'nombre' => 'Aitor Benjamin',
            'email' => 'ga_aito@ccc.edu.bo',]);
         $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809803792015750',
            'fec_nac' => '2010-09-24',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Gutierrez',
            'ape_materno' => 'Meneses',
            'nombre' => 'Asly Alondra',
            'email' => 'gm_asly@ccc.edu.bo',]);
         $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520152705',
            'fec_nac' => '2011-06-13',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Maldonado',
            'ape_materno' => 'Mercado',
            'nombre' => 'Sael Josias',
            'email' => 'mm_asael@ccc.edu.bo',]);
         $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252016018',
            'fec_nac' => '2011-06-20',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Medrano',
            'ape_materno' => 'Ballesteros',
            'nombre' => 'Ainhoa Lucia',
            'email' => 'mb_ainhoa@ccc.edu.bo',]);
         $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252016017',
            'fec_nac' => '2011-05-02',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Mercado',
            'ape_materno' => 'Flores',
            'nombre' => 'Bruno Agustin',
            'email' => 'mf_bruno@ccc.edu.bo',]);
         $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8090008220151429',
            'fec_nac' => '2011-02-07',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Palacios',
            'ape_materno' => 'Choque',
            'nombre' => 'Anny Isabel',
            'email' => 'pc_anny@ccc.edu.bo',]);
         $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520153022',
            'fec_nac' => '2011-06-05',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Sanzetenea',
            'ape_materno' => 'Zambrana',
            'nombre' => 'Kira Gabriela',
            'email' => 'sz_kira@ccc.edu.bo',]);
         $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252015308A',
            'fec_nac' => '2011-04-17',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Severich',
            'ape_materno' => 'Zurita',
            'nombre' => 'Luciana',
            'email' => 'sz_luciana@ccc.edu.bo',]);
         $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252015293A',
            'fec_nac' => '2010-11-11',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Sullcani',
            'ape_materno' => 'Quispe',
            'nombre' => 'Nataly Danitza',
            'email' => 'sq_mataly@ccc.edu.bo',]);
         $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252016004',
            'fec_nac' => '2011-04-09',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Torrico',
            'ape_materno' => 'Simenone',
            'nombre' => 'Janice Naomi',
            'email' => 'ts_janice@ccc.edu.bo',]);
         $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520153060',
            'fec_nac' => '2011-06-04',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Torrico',
            'ape_materno' => 'Garcia',
            'nombre' => 'Natalia Alessa',
            'email' => 'tg_natalia@ccc.edu.bo',]);
         $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520153003',
            'fec_nac' => '2010-12-26',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
              
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Triveño',
            'ape_materno' => 'Condori',
            'nombre' => 'Alejandra Ceci',
            'email' => 'tc_alejandra@ccc.edu.bo',]);
         $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252016002',
            'fec_nac' => '2011-06-04',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Valenzuela',
            'ape_materno' => 'Aruquipa',
            'nombre' => 'David Santiago',
            'email' => 'va_david@ccc.edu.bo',]);
         $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520153094',
            'fec_nac' => '2010-12-07',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Velasco',
            'ape_materno' => 'Poma',
            'nombre' => 'Yuren Andres',
            'email' => 'vp_yuren@ccc.edu.bo',]);
         $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252016001',
            'fec_nac' => '2010-12-20',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Zurita',
            'ape_materno' => 'Treviño',
            'nombre' => 'Gris Ainoha',
            'email' => 'zt_gris@ccc.edu.bo',]);
         $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520152982',
            'fec_nac' => '2011-02-07',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
    }

}
