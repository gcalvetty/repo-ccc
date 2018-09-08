<?php

use Illuminate\Database\Seeder;
use sis_ccc\User;
use sis_ccc\ModeloCCC\RUDE_1_Gestion;

class AdmTabEst_3SdrA extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $Aula = "A";
    public $Grado = "12"; // Pasa a: 4 Secundaria
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
        //3ro de Secundaria A

        factory(User::class)->create([
            'ape_paterno' => 'Alanes',
            'ape_materno' => 'Vargas',
            'nombre' => 'Jhoel',
            'email' => 'av_jhoel@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Almanza',
            'ape_materno' => 'Centellas',
            'nombre' => 'Eliel',
            'email' => 'ac_eliel@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Alvarado',
            'ape_materno' => 'Belzu',
            'nombre' => 'Hans Wilson',
            'email' => 'ab_hans@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Ascarruz',
            'ape_materno' => 'Gonzales',
            'nombre' => 'Elias Gabriel',
            'email' => 'ag_elias@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Bermudez',
            'ape_materno' => 'Santa Cruz',
            'nombre' => 'Luis Fernando',
            'email' => 'bs_luis@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Cadima',
            'ape_materno' => 'Chamane',
            'nombre' => 'Cristhian',
            'email' => 'cc_cristhian@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Cespedes',
            'ape_materno' => 'Medrano',
            'nombre' => 'Jose Luciano',
            'email' => 'cm_jose@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Choque',
            'ape_materno' => 'Bernal',
            'nombre' => 'Angela Ariana',
            'email' => 'cb_angela@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Crossa',
            'ape_materno' => 'Arnez',
            'nombre' => 'Adrian Eduardo',
            'email' => 'ca_adrian@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Fernandez',
            'ape_materno' => 'Salinas',
            'nombre' => 'Jhefferson Jhunior',
            'email' => 'fs_jherfferson@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Gozalves',
            'ape_materno' => 'Vargas',
            'nombre' => 'Jenny',
            'email' => 'gv_jenny@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Gutierrez',
            'ape_materno' => 'Meneses',
            'nombre' => 'Reyver Nilo',
            'email' => 'gm_reyver@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Jaldin',
            'ape_materno' => 'Sierra',
            'nombre' => 'Valentina Natalia',
            'email' => 'js_valentina@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Madariaga',
            'ape_materno' => 'Magne',
            'nombre' => 'Andrea Nikita',
            'email' => 'mm_andrea@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Magne',
            'ape_materno' => 'Luizaga',
            'nombre' => 'Fabrizio Hernan',
            'email' => 'ml_fabricio@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Monrroy',
            'ape_materno' => 'Rojas',
            'nombre' => 'Vania Camila',
            'email' => 'mr_vania@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Moya',
            'ape_materno' => 'Vidal',
            'nombre' => 'Santiago Alejandro',
            'email' => 'mv_santiago@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Patty',
            'ape_materno' => 'Camacho',
            'nombre' => 'Salvador',
            'email' => 'pc_salvador@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Rosales',
            'ape_materno' => 'Vera',
            'nombre' => 'Nicole Aracelli',
            'email' => 'rv_nicole@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Sejas',
            'ape_materno' => 'Miranda',
            'nombre' => 'Natalia Valeria',
            'email' => 'sm_natalia@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Silva',
            'ape_materno' => 'Canaviri',
            'nombre' => 'Diego',
            'email' => 'sc_diego@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Torrez',
            'ape_materno' => 'Caro',
            'nombre' => 'Jhoel Osbert',
            'email' => 'tc_jhoel@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Torrez',
            'ape_materno' => 'Tellez',
            'nombre' => 'Majherly Teresa',
            'email' => 'tt_majherly@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Vargas',
            'ape_materno' => 'Aranibar',
            'nombre' => 'Beymar Jhimi',
            'email' => 'va_beymar@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Vasques',
            'ape_materno' => 'Gonzales',
            'nombre' => 'Bruno Joel',
            'email' => 'vg_bruno@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Villegas',
            'ape_materno' => 'Vargas',
            'nombre' => 'Chisthian Alejandro',
            'email' => 'vv_chisthian@ccc.edu.bo',]); $this->addGestion();
    }

}
