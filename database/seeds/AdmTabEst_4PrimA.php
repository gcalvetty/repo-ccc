<?php

use Illuminate\Database\Seeder;
use sis_ccc\User;
use sis_ccc\ModeloCCC\RUDE;
use sis_ccc\ModeloCCC\RUDE_1_Gestion;

class AdmTabEst_4PrimA extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $Aula = "A";
    public $Grado = "7"; // Pasa a: 5 Primaria
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
        //4to de Primaria
        factory(User::class)->create([
            'ape_paterno' => 'Amurrio',
            'ape_materno' => 'Rada',
            'nombre' => 'Andres',
            'email' => 'ar_andres@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8090000420125719',
            'fec_nac' => '2006-08-04',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        factory(User::class)->create([
            'ape_paterno' => 'Ancasi',
            'ape_materno' => 'Quispe',
            'nombre' => 'Luis Gamaliel',
            'email' => 'aq_luis@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252012233',
            'fec_nac' => '2007-06-03',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Cadima',
            'ape_materno' => 'Mariscal',
            'nombre' => 'Melany Belen',
            'email' => 'cm_melany@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809800452011947',
            'fec_nac' => '2006-12-23',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        factory(User::class)->create([
            'ape_paterno' => 'Carrillo',
            'ape_materno' => 'Angulo',
            'nombre' => 'Erick Andre',
            'email' => 'ca_erick@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809800852011897',
            'fec_nac' => '2007-03-29',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Coca',
            'ape_materno' => 'Ayaviri',
            'nombre' => 'Mirco Abrham',
            'email' => 'ca_mirco@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520112342',
            'fec_nac' => '2007-06-08',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Fernandez',
            'ape_materno' => 'Mendoza',
            'nombre' => 'Luciana',
            'email' => 'fm_luciana@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '80900099201228A',
            'fec_nac' => '2007-01-06',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Fuentes',
            'ape_materno' => 'Cabrera',
            'nombre' => 'Dylan Mijael',
            'email' => 'fc_dylan@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090000720125256',
            'fec_nac' => '2007-06-15',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Gareca',
            'ape_materno' => 'Ordoñez',
            'nombre' => 'Carla Angelica',
            'email' => 'go_carla@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8098042520112724',
            'fec_nac' => '2006-12-10',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Jaillita',
            'ape_materno' => 'Quiroga',
            'nombre' => 'Brenda',
            'email' => 'jq_brenda@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520160054',
            'fec_nac' => '2007-04-09',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Mantilla',
            'ape_materno' => 'Valencia',
            'nombre' => 'Luz Judith',
            'email' => 'mv_luz@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8073015120114843',
            'fec_nac' => '2007-03-07',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Meneses',
            'ape_materno' => 'Rojas',
            'nombre' => 'Carlos Daniel',
            'email' => 'mr_carlos@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '40900025201219A',
            'fec_nac' => '2007-03-11',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Mercado',
            'ape_materno' => 'Flores',
            'nombre' => 'Franchesco',
            'email' => 'mf_franchesco@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8090008020111556',
            'fec_nac' => '2002-05-17',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Pardo',
            'ape_materno' => 'Ayaviri',
            'nombre' => 'Elory Lisbet',
            'email' => 'pa_elory@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8090001420111914',
            'fec_nac' => '2007-06-22',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Reyes',
            'ape_materno' => 'Valdivia',
            'nombre' => 'Mariam Itzier',
            'email' => 'rv_mariam@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '80980390201417033A',
            'fec_nac' => '2007-02-01',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Rios',
            'ape_materno' => 'San Miguel',
            'nombre' => 'Zuely Sagir',
            'email' => 'rs_zuely@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809000842011395',
            'fec_nac' => '2007-06-22',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Rojas',
            'ape_materno' => 'Torrico',
            'nombre' => 'Melony',
            'email' => 'rt_melony@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8098036520128443',
            'fec_nac' => '2006-12-19',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Rosales',
            'ape_materno' => 'Vera',
            'nombre' => 'Rafael Augusto',
            'email' => 'rv_rafael@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252012280',
            'fec_nac' => '2006-11-11',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Sanchez',
            'ape_materno' => 'Cornejo',
            'nombre' => 'Natalia',
            'email' => 'sc_natalia@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809805132012407',
            'fec_nac' => '2007-06-06',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Sandoval',
            'ape_materno' => 'Almanza',
            'nombre' => 'Augusto',
            'email' => 'sa_augusto@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520112945',
            'fec_nac' => '2007-03-23',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Silva',
            'ape_materno' => 'Urrutia',
            'nombre' => 'Luz Valeria',
            'email' => 'su_luz@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '81970094201220A',
            'fec_nac' => '2006-10-21',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Terrazas',
            'ape_materno' => 'Vargas',
            'nombre' => 'Jorge Luis',
            'email' => 'tv_jorge@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809000382012482',
            'fec_nac' => '2006-10-21',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Torrez',
            'ape_materno' => 'Nuñez',
            'nombre' => 'Vivian Andrea',
            'email' => 'tn_vivian@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8083000620125290',
            'fec_nac' => '2007-07-30',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Tudela',
            'ape_materno' => 'Gutierrez',
            'nombre' => 'Ehi Absalon',
            'email' => 'tg_ehi@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252012184',
            'fec_nac' => '2007-02-28',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Valenzuela',
            'ape_materno' => 'Aruquipa',
            'nombre' => 'Liam Benjamin',
            'email' => 'va_liam@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8098023520111968',
            'fec_nac' => '2007-04-07',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Villanueva',
            'ape_materno' => 'Torrez',
            'nombre' => 'Raquel Luciana',
            'email' => 'vt_raquel@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '80730235201141361',
            'fec_nac' => '2007-03-09',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
    }

}
