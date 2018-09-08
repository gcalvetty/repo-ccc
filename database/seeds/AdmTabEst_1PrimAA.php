<?php

use Illuminate\Database\Seeder;
use sis_ccc\User;
use sis_ccc\ModeloCCC\RUDE;
use sis_ccc\ModeloCCC\RUDE_1_Gestion;

class AdmTabEst_1PrimAA extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $Aula = "AA";
    public $Grado = "4"; // Pasa a: 2Grado
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
        //1ro de Primaria AA
        factory(User::class)->create([
            'ape_paterno' => 'Alfaro',
            'ape_materno' => 'Ruiz',
            'nombre' => 'Sebastian Wesley',
            'email' => 'ar_sebastian@ccc.edu.bo',]); 
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520143943',
            'fec_nac' => '2010-06-01',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Borda',
            'ape_materno' => 'Romero',
            'nombre' => 'Alejandro Benjamin',
            'email' => 'br_alejandro@ccc.edu.bo',]); 
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520144040',
            'fec_nac' => '2010-06-21',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        factory(User::class)->create([
            'ape_paterno' => 'Buendia',
            'ape_materno' => 'Mamani',
            'nombre' => 'Rene Arturo',
            'email' => 'bm_rene@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520144002',
            'fec_nac' => '2010-05-11',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Caero',
            'ape_materno' => 'Paco',
            'nombre' => 'Edda',
            'email' => 'cp_edda@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252014391A',
            'fec_nac' => '2009-09-17',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Cardozo',
            'ape_materno' => 'Torrico',
            'nombre' => 'Vilma Valeria',
            'email' => 'ct_vilma@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520152891',
            'fec_nac' => '2010-06-15',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Castellon',
            'ape_materno' => 'Valda',
            'nombre' => 'Valeria Mayte',
            'email' => 'cv_valeria@ccc.edu.bo',]); 
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520144055',
            'fec_nac' => '2010-05-10',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Cespedes',
            'ape_materno' => 'Mena',
            'nombre' => 'Jessie',
            'email' => 'cm_jessie@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '40900025201586164',
            'fec_nac' => '2010-06-10',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Coca',
            'ape_materno' => 'Troncoso',
            'nombre' => 'Luana',
            'email' => 'ct_luana@ccc.edu.bo',]); 
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8090002320144199',
            'fec_nac' => '2009-11-04',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Condori',
            'ape_materno' => 'mendia',
            'nombre' => 'Brandon',
            'email' => 'ct_brandom@ccc.edu.bo',]); 
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520144074',
            'fec_nac' => '2010-03-20',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        

        factory(User::class)->create([
            'ape_paterno' => 'Coria',
            'ape_materno' => 'Russel',
            'nombre' => 'Tony Leonardo',
            'email' => 'cr_tony@ccc.edu.bo',]); 
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520143833',
            'fec_nac' => '2010-06-02',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        

        factory(User::class)->create([
            'ape_paterno' => 'Fernandez',
            'ape_materno' => 'Mendoza',
            'nombre' => 'Carolina',
            'email' => 'fm_carolina@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520153170',
            'fec_nac' => '2010-02-14',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);

        factory(User::class)->create([
            'ape_paterno' => 'Flores',
            'ape_materno' => 'Vargas',
            'nombre' => 'Ghadiel David',
            'email' => 'fv_ghadiel@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520152872',
            'fec_nac' => '2010-05-17',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Fuentes',
            'ape_materno' => 'Cabrera',
            'nombre' => 'Kitsia Rihanna',
            'email' => 'fc_kitsia@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520152887',
            'fec_nac' => '2010-05-17',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Ichota',
            'ape_materno' => 'Heredia',
            'nombre' => 'Jose Daniel',
            'email' => 'ih_jose@ccc.edu.bo',]); 
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520154564',
            'fec_nac' => '2010-01-20',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Mamani',
            'ape_materno' => 'Lazo',
            'nombre' => 'Erick',
            'email' => 'ml_erick@ccc.edu.bo',]); 
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520152868',
            'fec_nac' => '2010-04-22',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Mejia',
            'ape_materno' => 'Coca',
            'nombre' => 'Ainhoa Emily',
            'email' => 'mc_ainhoa@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520152963',
            'fec_nac' => '2010-06-04',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Montaño',
            'ape_materno' => 'Yucra',
            'nombre' => 'Matias Alejandro',
            'email' => 'my_matias@ccc.edu.bo',]); 
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520143852',
            'fec_nac' => '2010-02-12',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Omonte',
            'ape_materno' => 'Camacho',
            'nombre' => 'Natalia Gabriela',
            'email' => 'oc_natalia@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8098032320144971',
            'fec_nac' => '2010-06-01',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Ontiveros',
            'ape_materno' => 'Miranda',
            'nombre' => 'Jairo',
            'email' => 'om_jairo@ccc.edu.bo',]); 
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520153204',
            'fec_nac' => '2010-01-27',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Pastor',
            'ape_materno' => 'Copa',
            'nombre' => 'Shelton Sedric',
            'email' => 'pc_sheldon@ccc.edu.bo',]); 
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8098056820141013',
            'fec_nac' => '2009-10-17',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Relova',
            'ape_materno' => 'Ayaviri',
            'nombre' => 'Noel Jhostin',
            'email' => 'ra_noel@ccc.edu.bo',]); 
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520152910',
            'fec_nac' => '2010-05-29',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'San',
            'ape_materno' => 'Miguel',
            'nombre' => 'Cortez Valquiria',
            'email' => 'sm_Cortez@ccc.edu.bo',]); 
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520153132',
            'fec_nac' => '2010-06-20',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Terrazas',
            'ape_materno' => 'Vargas',
            'nombre' => 'Madelen Jhasmin',
            'email' => 'tv_madelen@ccc.edu.bo',]); 
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809000982014971A',
            'fec_nac' => '2010-02-15',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Vilcaez',
            'ape_materno' => 'Sequeiro',
            'nombre' => 'Luis Alejandro',
            'email' => 'vs_luis@ccc.edu.bo',]); 
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '40900025201415054',
            'fec_nac' => '2010-06-20',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
               
        
        factory(User::class)->create([
            'ape_paterno' => 'Villanueva',
            'ape_materno' => 'Roca',
            'nombre' => 'Adabigail',
            'email' => 'vr_adabigail@ccc.edu.bo',]); 
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '6090001620144429',
            'fec_nac' => '2010-06-26',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        factory(User::class)->create([
            'ape_paterno' => 'Yañez',
            'ape_materno' => 'Palpartida',
            'nombre' => 'Guillermo de Jesus',
            'email' => 'yp_guillermo@ccc.edu.bo',]); 
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8098035320159202',
            'fec_nac' => '2010-02-10'
            . '',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
    }

}
