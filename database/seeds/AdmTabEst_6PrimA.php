<?php

use Illuminate\Database\Seeder;
use sis_ccc\User;
use sis_ccc\ModeloCCC\RUDE;
use sis_ccc\ModeloCCC\RUDE_1_Gestion;

class AdmTabEst_6PrimA extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $Aula = "A";
    public $Grado = "9"; // Pasa a: 1 Secundaria

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
        //6to de Primaria
        factory(User::class)->create([
            'ape_paterno' => 'Aguilar',
            'ape_materno' => 'Vera',
            'nombre' => 'Walter Josue',
            'email' => 'av_walter@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8098019420113720',
            'fec_nac' => '2005-09-02',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Alanes',
            'ape_materno' => 'Mamani',
            'nombre' => 'Jhoan Adalid',
            'email' => 'am_jhon@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '40900025201018A',
            'fec_nac' => '2004-10-05',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Alegre',
            'ape_materno' => 'Yucra',
            'nombre' => 'Carla',
            'email' => 'ay_carla@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252010265',
            'fec_nac' => '2004-11-05',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Alfaro',
            'ape_materno' => 'Ruiz',
            'nombre' => 'Nicolas Andre',
            'email' => 'ar_nicolas@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252010286',
            'fec_nac' => '2005-09-24',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Antonio',
            'ape_materno' => 'Guzman',
            'nombre' => 'Gillian Ivana',
            'email' => 'ag_gillian@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809802392010650',
            'fec_nac' => '2004-12-19',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Balderrama',
            'ape_materno' => 'Churme',
            'nombre' => 'Lucia Isabel',
            'email' => 'bc_lucia@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809803792010140',
            'fec_nac' => '2005-02-28',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Bustamante',
            'ape_materno' => 'Claros',
            'nombre' => 'Boris Ricardo',
            'email' => 'bc_boris@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8090001420072131',
            'fec_nac' => '2003-03-25',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Cabrera',
            'ape_materno' => 'Jaillita',
            'nombre' => 'Aracely',
            'email' => 'cj_aracely@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '6090002420101626',
            'fec_nac' => '2005-07-20',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Calderon',
            'ape_materno' => 'Quispe',
            'nombre' => 'Blanca Abigail',
            'email' => 'cq_blanca@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8090008720094A',
            'fec_nac' => '2005-06-08',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Coca',
            'ape_materno' => 'Ayaviri',
            'nombre' => 'Azul Bethlem',
            'email' => 'ca_azul@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520094106',
            'fec_nac' => '2005-08-15',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Colque',
            'ape_materno' => 'Ariñez',
            'nombre' => 'Alvaro',
            'email' => 'ca_alvaro@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4073007820102598',
            'fec_nac' => '2005-05-06',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Fernandez',
            'ape_materno' => 'Veizaga',
            'nombre' => 'Favio',
            'email' => 'fv_favio@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090000220114853',
            'fec_nac' => '2005-05-06',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Forest',
            'ape_materno' => 'Uño',
            'nombre' => 'Lola Victoria',
            'email' => 'fu_lola@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520101478',
            'fec_nac' => '2005-08-30',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Foronda',
            'ape_materno' => 'Sandoval',
            'nombre' => 'Carlos Elmer',
            'email' => 'fs_carlos@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520101482',
            'fec_nac' => '2005-01-19',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Gutiérrez',
            'ape_materno' => 'Meneses',
            'nombre' => 'Ninoska Cheli',
            'email' => 'gm_ninoska@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8098051020101901',
            'fec_nac' => '2005-04-29',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Herbas',
            'ape_materno' => 'Romero',
            'nombre' => 'Bernabé',
            'email' => 'hr_bernabe@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '40900025201414992',
            'fec_nac' => '2005-04-09',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Iriarte',
            'ape_materno' => 'Zamorano',
            'nombre' => 'Steve',
            'email' => 'iz_steve@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520134851',
            'fec_nac' => '2004-03-15',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Mantilla',
            'ape_materno' => 'Valencia',
            'nombre' => 'Wiliams Brandon',
            'email' => 'mv_wiliams@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8073054720106125',
            'fec_nac' => '2004-09-01',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Mejia',
            'ape_materno' => 'Teran',
            'nombre' => 'Eunice',
            'email' => 'mt_eunice@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '809000562010789',
            'fec_nac' => '2005-06-28',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Morales',
            'ape_materno' => 'Caspa',
            'nombre' => 'Mikhail Anthonny',
            'email' => 'mc_mikhail@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8090002320101922',
            'fec_nac' => '2005-02-27',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Nogales',
            'ape_materno' => 'Ayala',
            'nombre' => 'Danae',
            'email' => 'na_danae@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '409000252010235A',
            'fec_nac' => '2005-06-29',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Rojas',
            'ape_materno' => 'Herbas',
            'nombre' => 'kevin Osvaldo',
            'email' => 'rh_kevin@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520164341',
            'fec_nac' => '2003-01-18',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Sanchez',
            'ape_materno' => 'Herbas',
            'nombre' => 'Adrian',
            'email' => 'sh_adrian@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '4090002520102842',
            'fec_nac' => '2005-05-20',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Sejas',
            'ape_materno' => 'Antezana',
            'nombre' => 'Mayra Heraldinne',
            'email' => 'sa_mayra@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8090009520102808',
            'fec_nac' => '2005-07-13',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Silva',
            'ape_materno' => 'Urrutia',
            'nombre' => 'Abigail',
            'email' => 'su_abigail@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '81981221200910296',
            'fec_nac' => '2004-11-22',
            'sexo' => 'F',
            'estado' => 'No Inscrito',
        ]);
        
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Terrazas',
            'ape_materno' => 'Vargas',
            'nombre' => 'Brandon',
            'email' => 'tv_brandon@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '8090009820091042',
            'fec_nac' => '2004-10-12',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
        
        
        factory(User::class)->create([
            'ape_paterno' => 'Uriona',
            'ape_materno' => 'Escobar',
            'nombre' => 'Eliana de Fatima',
            'email' => 'ue_eliana@ccc.edu.bo',]);
        $id = $this->addGestion();
        factory(RUDE::class)->create([
            'user_id' => $id,
            'cod_rude' => '7144005220116213',
            'fec_nac' => '2005-05-19',
            'sexo' => 'M',
            'estado' => 'No Inscrito',
        ]);
    }

}
