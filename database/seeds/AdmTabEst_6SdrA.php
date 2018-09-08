<?php

use Illuminate\Database\Seeder;
use sis_ccc\User;
use sis_ccc\ModeloCCC\RUDE_1_Gestion;

class AdmTabEst_6SdrA extends Seeder {

    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public $Aula = "A";
    public $Grado = "14"; // Pasa a: Universidad
    public function addGestion(){       
        $user = User::where('tipo_Usu', 'Est_ccc')
                        ->orderBy('id', 'desc')->first();
        factory(RUDE_1_Gestion::class)->create([
            'user_id' => $user->id,            
            'gst_aula'=> $this->Aula,
            'gst_gestion' => 2016,
            'gst_grd_escolar' => $this->Grado,            
        ]);         
    }
    
    public function run() {
        //6to de Secundaria

        factory(User::class)->create([
            'ape_paterno' => 'Arredondo',
            'ape_materno' => 'Pardo',
            'nombre' => 'Jhanin Jhusep',            
            'email' => 'ap_jhanin@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Barra',
            'ape_materno' => 'Yucra',
            'nombre' => 'Juan Pablo',
            'email' => 'by_juan@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Bermudez',
            'ape_materno' => 'Santa Cruz',
            'nombre' => 'Xavier',
            'email' => 'bs_xavier@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Fernandez',
            'ape_materno' => 'Foronda',
            'nombre' => 'Favio Daniel',
            'email' => 'ff_favio@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Flores',
            'ape_materno' => 'Prada',
            'nombre' => 'Daniel Pablo',
            'email' => 'fp_daniel@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Gutierrez',
            'ape_materno' => 'Vidal',
            'nombre' => 'Paolo Rene',
            'email' => 'gv_paolo@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Justiniano',
            'ape_materno' => 'Magne',
            'nombre' => 'Laura Micaela',
            'email' => 'jm_l@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Lopez',
            'ape_materno' => 'Echenique',
            'nombre' => 'Jan Carlo',
            'email' => 'le_jan@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Maldonado',
            'ape_materno' => 'San Miguel',
            'nombre' => 'Erick Nicolas',
            'email' => 'ms_erick@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Nogales',
            'ape_materno' => 'Roas',
            'nombre' => 'Kevin',
            'email' => 'nr_kevin@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Parrilla',
            'ape_materno' => 'Soto',
            'nombre' => 'Roberto Carlos',
            'email' => 'ps_roberto@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Quispe',
            'ape_materno' => 'Omonte',
            'nombre' => 'Joel',
            'email' => 'qo_joel@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Rocabado',
            'ape_materno' => 'Quispe',
            'nombre' => 'Gabriela',
            'email' => 'rq_gabriela@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Rodriguez',
            'ape_materno' => 'Velez',
            'nombre' => 'Gustano',
            'email' => 'rv_gustano@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Rojas',
            'ape_materno' => 'Torrico',
            'nombre' => 'Laura Nayla',
            'email' => 'rt_laura@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Ruiz',
            'ape_materno' => 'Bustos',
            'nombre' => 'Jhon Jairo',
            'email' => 'rb_jhon@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Torrico',
            'ape_materno' => 'Salvatierra',
            'nombre' => 'Arturo Andres',
            'email' => 'ts_arturo@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Uriona',
            'ape_materno' => 'Escobar',
            'nombre' => 'Deysi',
            'email' => 'ue_deysi@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Villca',
            'ape_materno' => 'Tejerina',
            'nombre' => 'Julio Cesar',
            'email' => 'vt_julio@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Zalles',
            'ape_materno' => '',
            'nombre' => '',
            'email' => 'zalles@ccc.edu.bo',]); $this->addGestion();
    }

}
