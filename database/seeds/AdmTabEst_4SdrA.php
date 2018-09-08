<?php

use Illuminate\Database\Seeder;
use sis_ccc\User;
use sis_ccc\ModeloCCC\RUDE_1_Gestion;

class AdmTabEst_4SdrA extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $Aula = "A";
    public $Grado = "13"; // Pasa a: 5 Secundaria
    public function addGestion(){       
        $user = User::where('tipo_Usu', 'Est_ccc')
                        ->orderBy('id', 'desc')->first();
        factory(RUDE_1_Gestion::class)->create([
            'user_id' => $user->id,            
            'gst_aula'=> $this->Aula,
            'gst_grd_escolar' => $this->Grado,            
        ]);        
    }
    
    public function run() {
        //4to de Secundaria A 

        factory(User::class)->create([
            'ape_paterno' => 'Alegre',
            'ape_materno' => 'Choque',
            'nombre' => 'Julia Elena',
            'email' => 'ac_julia@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Apaza',
            'ape_materno' => 'Mollo',
            'nombre' => 'Jose Raul',
            'email' => 'ap_jose@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Arandia',
            'ape_materno' => 'Yugar',
            'nombre' => 'Raymond',
            'email' => 'ay_raymond@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Aranibar',
            'ape_materno' => 'Guzman',
            'nombre' => 'Mirtha Micaela',
            'email' => 'ag_mirtha@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Bermudez',
            'ape_materno' => 'Jimenez',
            'nombre' => 'Marco Jardiel',
            'email' => 'bj_marco@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Cespedes',
            'ape_materno' => 'Mena',
            'nombre' => 'Camila',
            'email' => 'cm_camila@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Condori',
            'ape_materno' => 'Pardo',
            'nombre' => 'Kevin Dieter',
            'email' => 'cp_kevin@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Chavez',
            'ape_materno' => 'Cadima',
            'nombre' => 'Maira Paola',
            'email' => 'cc_maira@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Cueto',
            'ape_materno' => 'Bustamante',
            'nombre' => 'Bened Andres',
            'email' => 'cb_bened@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Gascon',
            'ape_materno' => 'Garabito',
            'nombre' => 'Galia Kira',
            'email' => 'gg_galicia@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Iriarte',
            'ape_materno' => 'Zamorano',
            'nombre' => 'Sergio Rodrigo',
            'email' => 'iz_sergio@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Maita',
            'ape_materno' => 'Caceres',
            'nombre' => 'Najhely Arleth',
            'email' => 'mc_najhely@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Miranda',
            'ape_materno' => 'Pinedo',
            'nombre' => 'Valeria Abril',
            'email' => 'mp_valeria@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Montan',
            'ape_materno' => 'Franco',
            'nombre' => 'Mijael Humberto',
            'email' => 'mf_mijael@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Nina',
            'ape_materno' => 'Revollo',
            'nombre' => 'Helen Mishel',
            'email' => 'nr_helen@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Pacci',
            'ape_materno' => 'Alvarez',
            'nombre' => 'Kateryn',
            'email' => 'pa_kateryn@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Pardo',
            'ape_materno' => 'Quispe',
            'nombre' => 'Kevin Brayan',
            'email' => 'pq_kevin@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Paredes',
            'ape_materno' => 'Gutierrez',
            'nombre' => 'Jhoel Josue',
            'email' => 'pg_jhoel@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Perez',
            'ape_materno' => 'Villarroel',
            'nombre' => 'Jhoselin',
            'email' => 'pv_jhoselin@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Rocha',
            'ape_materno' => 'Claros',
            'nombre' => 'Julio Cesar',
            'email' => 'rc_julio@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Sanchez',
            'ape_materno' => 'Arauz',
            'nombre' => 'Dayana Michelle',
            'email' => 'sa_dayana@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Torrez',
            'ape_materno' => 'Ibarra',
            'nombre' => 'Rodrigo',
            'email' => 'ti_rodrigo@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Vaga',
            'ape_materno' => 'Torrico',
            'nombre' => 'Ashley Erika',
            'email' => 'vt_ashley@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Villalobos',
            'ape_materno' => 'Guaqui',
            'nombre' => 'Esther Daniela',
            'email' => 'vg_esther@ccc.edu.bo',]); $this->addGestion();
    }

}
