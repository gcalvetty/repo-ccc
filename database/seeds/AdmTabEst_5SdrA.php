<?php

use Illuminate\Database\Seeder;
use sis_ccc\User;
use sis_ccc\ModeloCCC\RUDE_1_Gestion;

class AdmTabEst_5SdrA extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $Aula = "A";
    public $Grado = "14"; // Pasa a: 6 Secundaria
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
        //5to de Secundaria

        factory(User::class)->create([
            'ape_paterno' => 'Aramayo',
            'ape_materno' => 'Cornejo',
            'nombre' => 'Jhony',
            'email' => 'ac_jhony@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Colque',
            'ape_materno' => 'Calle',
            'nombre' => 'Milton',
            'email' => 'cc_milton@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Copa',
            'ape_materno' => 'Maydana',
            'nombre' => 'Naomi Carolyn',
            'email' => 'cm_naomi@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Cordeiro',
            'ape_materno' => 'Borja',
            'nombre' => 'Erve',
            'email' => 'cb_erve@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Cutipa',
            'ape_materno' => 'Rodriguez',
            'nombre' => 'Andrea',
            'email' => 'cr_andrea@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Espinoza',
            'ape_materno' => 'Tordoya',
            'nombre' => 'Jhon Julio',
            'email' => 'et_jhon@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Fernandez',
            'ape_materno' => 'Molina',
            'nombre' => 'Heydi',
            'email' => 'fm_heydi@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Flores',
            'ape_materno' => 'Valverde',
            'nombre' => 'Luis Enrrique',
            'email' => 'fv_luis@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Guzman',
            'ape_materno' => 'Soliz',
            'nombre' => 'Franco Fabian',
            'email' => 'gs_franco@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Llanos',
            'ape_materno' => 'Cardozo',
            'nombre' => 'Dayana Virginia',
            'email' => 'lc_dayana@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Maizares',
            'ape_materno' => 'Rodriguez',
            'nombre' => 'Paola Nataly',
            'email' => 'mr_paola@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Mamani',
            'ape_materno' => 'Alaca',
            'nombre' => 'Elisa',
            'email' => 'ma_elisa@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Meneses',
            'ape_materno' => 'Rojas',
            'nombre' => 'Limbania Valery',
            'email' => 'mr_limbania@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Mercado',
            'ape_materno' => 'Orellana',
            'nombre' => 'Wayra',
            'email' => 'mo_wayra@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Mora',
            'ape_materno' => 'Torrico',
            'nombre' => 'Daniel Eduardo',
            'email' => 'mt_daniel@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Parrilla',
            'ape_materno' => 'Soto',
            'nombre' => 'Maria Rene',
            'email' => 'ps_maria@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Quezada',
            'ape_materno' => 'Rodriguez',
            'nombre' => 'David',
            'email' => 'qr_david@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Quezada',
            'ape_materno' => 'Rodriguez',
            'nombre' => 'Jhesenia',
            'email' => 'qr_jhesenia@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Ramirez',
            'ape_materno' => 'Baptista',
            'nombre' => 'Flavia Luana',
            'email' => 'rb_favia@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Relova',
            'ape_materno' => 'Ayaviri',
            'nombre' => 'Harian Dayana',
            'email' => 'ra_harian@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Rodrigez',
            'ape_materno' => 'Sandagorda',
            'nombre' => 'Emmanuel',
            'email' => 'rs_emmanuel@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Vargas',
            'ape_materno' => 'Aranibar',
            'nombre' => 'Guthnar Kevin',
            'email' => 'va_guthnar@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Veizaga',
            'ape_materno' => 'Vargas',
            'nombre' => 'Karen Sheila',
            'email' => 'vv_karen@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Villca',
            'ape_materno' => 'Tejerina',
            'nombre' => 'Maria Fernanda',
            'email' => 'vt_maria@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Viza',
            'ape_materno' => 'Ramos',
            'nombre' => 'Jhony',
            'email' => 'vr_jhony@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Zillman',
            'ape_materno' => 'Paniagua',
            'nombre' => 'Alejandra Cristhal',
            'email' => 'zp_alejandra@ccc.edu.bo',]); $this->addGestion();
    }

}
