<?php

use Illuminate\Database\Seeder;
use sis_ccc\User;
use sis_ccc\ModeloCCC\RUDE;
use sis_ccc\ModeloCCC\RUDE_1_Gestion;

class AdmTabEst_3PrimA extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $Aula = "A";
    public $Grado = "6"; // Pasa a: 4 Primaria
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
        //3ro de Primaria
        factory(User::class)->create([
            'ape_paterno' => 'Aguilar',
            'ape_materno' => 'Vera',
            'nombre' => 'Anny Aurora',
            'email' => 'av_anny@ccc.edu.bo',]); 
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8098041120126910',
            'fec_nac' => '2008-05-12',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Alanes',
            'ape_materno' => 'Mamani',
            'nombre' => 'Victoria Rebeca',
            'email' => 'am_victoria@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520124467',
            'fec_nac' => '2008-01-24',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Alegre',
            'ape_materno' => 'Yucra',
            'nombre' => 'Alejandro Gabriel',
            'email' => 'ay_alejandro@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520124543',
            'fec_nac' => '2008-05-18',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Alfaro',
            'ape_materno' => 'Ruiz',
            'nombre' => 'Madison Amberly',
            'email' => 'ar_madison@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8098047220133847',
            'fec_nac' => '2008-02-16',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Arispe',
            'ape_materno' => 'Gomez',
            'nombre' => 'Alison',
            'email' => 'ag_alison@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8098032320122037',
            'fec_nac' => '2008-02-08',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Ascarrunz',
            'ape_materno' => 'Gonzales',
            'nombre' => 'Alejandro Issac',
            'email' => 'ag_alejandro@ccc.edu.bo',]); 
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '80730375201216',
            'fec_nac' => '2008-04-03',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Balderrama',
            'ape_materno' => 'Ayllon',
            'nombre' => 'Leandro Limbert',
            'email' => 'ba_leandro@ccc.edu.bo',]); 
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520160240',
            'fec_nac' => '2007-09-03',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
                
        
        factory(User::class)->create([
            'ape_paterno' => 'Cabezas',
            'ape_materno' => 'Merino',
            'nombre' => 'Amaya Mireya',
            'email' => 'cm_amaya@ccc.edu.bo',]); 
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '80900078201252',
            'fec_nac' => '2008-06-19',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Cabrera',
            'ape_materno' => 'Villaroel',
            'nombre' => 'Richard Andre',
            'email' => 'cv_richard@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252013363',
            'fec_nac' => '2008-05-12',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Callisaya',
            'ape_materno' => 'Antonio',
            'nombre' => 'Joseph Lucas',
            'email' => 'ca_joseph@ccc.edu.bo',]); 
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8098041820123878',
            'fec_nac' => '2008-06-13',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
              
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Cardenas',
            'ape_materno' => 'Gomez',
            'nombre' => 'Jairo Albeyro',
            'email' => 'cg_jairo@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809000952013687',
            'fec_nac' => '2007-08-09',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Diaz',
            'ape_materno' => 'Marupa',
            'nombre' => 'Joseph Gadiel',
            'email' => 'dm_joseph@ccc.edu.bo',]); 
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8090001520121899',
            'fec_nac' => '2008-01-01',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Dorado',
            'ape_materno' => 'Villalta',
            'nombre' => 'Max Fernando',
            'email' => 'dv_max@ccc.edu.bo',]); 
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '40900025201339A',
            'fec_nac' => '2007-10-05',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Eugenio',
            'ape_materno' => 'Calisaya',
            'nombre' => 'Anahi',
            'email' => 'ec_anahi@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252013407',
            'fec_nac' => '2008-06-04',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
                
        
        factory(User::class)->create([
            'ape_paterno' => 'Gareca',
            'ape_materno' => 'Ordoñez',
            'nombre' => 'Laura',
            'email' => 'go_laura@ccc.edu.bo',]); 
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252013412',
            'fec_nac' => '2008-06-12',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
               
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Gonzales',
            'ape_materno' => 'Orellana',
            'nombre' => 'Lesly Cecil',
            'email' => 'go_lesly@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8098032920148721',
            'fec_nac' => '2008-06-07',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
                
        factory(User::class)->create([
            'ape_paterno' => 'Jaillita',
            'ape_materno' => 'Saavedra',
            'nombre' => 'Bruce Antonnyo',
            'email' => 'js_bruce@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252013433',
            'fec_nac' => '2008-05-09',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Jordan',
            'ape_materno' => 'Arhuata',
            'nombre' => 'Gabriel Alejandro',
            'email' => 'ja_gabriel@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8098010620123156',
            'fec_nac' => '2008-02-03',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
       
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Nina',
            'ape_materno' => 'Rebollo',
            'nombre' => 'Aren Nicol',
            'email' => 'nr_aren@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8090008620131449',
            'fec_nac' => '2008-01-17',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
                  
        
        factory(User::class)->create([
            'ape_paterno' => 'Omonte',
            'ape_materno' => 'Rivas',
            'nombre' => 'Luciana Valeska',
            'email' => 'or_luciana_valenka@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809001102012373',
            'fec_nac' => '2007-06-27',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
                
        
        factory(User::class)->create([
            'ape_paterno' => 'Padilla',
            'ape_materno' => 'Galaza',
            'nombre' => 'Jhojan Felipe',
            'email' => 'pg_jhojan@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809000892013622',
            'fec_nac' => '2007-06-27',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Recalde',
            'ape_materno' => 'Ayma',
            'nombre' => 'Jairo David',
            'email' => 'ra_jairo@ccc.edu.bo',]); 
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252014325A',
            'fec_nac' => '2007-09-21',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Rocabado',
            'ape_materno' => 'Torrico',
            'nombre' => 'Nataly Evelin',
            'email' => 'rt_nataly@ccc.edu.bo',]); 
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809000992012963',
            'fec_nac' => '2008-03-28',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
       
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Rodriguez',
            'ape_materno' => 'Sandagorda',
            'nombre' => 'Alejandra Nataneli',
            'email' => 'rs_alejandra@ccc.edu.bo',]); 
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252012451A',
            'fec_nac' => '2018-02-19',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
           
        
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Rosales',
            'ape_materno' => 'Vera',
            'nombre' => 'Stefany',
            'email' => 'rv_stefany@ccc.edu.bo',]); 
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520124505',
            'fec_nac' => '2007-12-22',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Ruiz',
            'ape_materno' => 'Ayala',
            'nombre' => 'Luzio Ricardo',
            'email' => 'ra_luzio@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '80980369201213600',
            'fec_nac' => '2007-03-28',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Severich',
            'ape_materno' => 'Zurita',
            'nombre' => 'Diana',
            'email' => 'sz_diana@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520124539',
            'fec_nac' => '2008-01-04',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
             
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Sullcani',
            'ape_materno' => 'Quispe',
            'nombre' => 'Jhancarla',
            'email' => 'sq_jhancarla@ccc.edu.bo',]); 
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252013592',
            'fec_nac' => '2008-06-05',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Valencia',
            'ape_materno' => 'Calisaya',
            'nombre' => 'Valeria Leslie',
            'email' => 'vc_valeria@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8098032320137825',
            'fec_nac' => '2007-07-31',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
               
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Vargas',
            'ape_materno' => 'Heredia',
            'nombre' => 'Melany Anael',
            'email' => 'vh_melany@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520124558',
            'fec_nac' => '2008-04-24',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
    }

}
