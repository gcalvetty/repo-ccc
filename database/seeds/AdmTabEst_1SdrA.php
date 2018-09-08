<?php

use Illuminate\Database\Seeder;
use sis_ccc\User;
use sis_ccc\ModeloCCC\RUDE_1_Gestion;

class AdmTabEst_1SdrA extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $Aula = "A";
    public $Grado = "10"; // Pasa a: 2 Secundaria
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
        //1ro de Secundaria A

        factory(User::class)->create([
            'ape_paterno' => 'Alanes',
            'ape_materno' => 'Vargas',
            'nombre' => 'Jhulian',
            'email' => 'av_jhulian@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Alegre',
            'ape_materno' => 'Choque',
            'nombre' => 'Nataly',
            'email' => 'ac_nataly@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Almanza',
            'ape_materno' => 'Quispe',
            'nombre' => 'Anderson',
            'email' => 'aq_anderson@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Arandia',
            'ape_materno' => 'Peñarrieta',
            'nombre' => 'Naomi Isabel',
            'email' => 'ap_naomi@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Ascarrunz',
            'ape_materno' => 'Gonzales',
            'nombre' => 'Marco Josue',
            'email' => 'ag_marco@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Choque',
            'ape_materno' => 'Bernal',
            'nombre' => 'Sebastian Alberto',
            'email' => 'cb_sebastian@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Eid',
            'ape_materno' => 'Guzman',
            'nombre' => 'kaleb Carlos',
            'email' => 'eg_kaleb@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Eid',
            'ape_materno' => 'Guzman',
            'nombre' => 'Yibrail Nivardo',
            'email' => 'eg_yibrail@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Escalante',
            'ape_materno' => 'Valda',
            'nombre' => 'Valeria Mayte',
            'email' => 'ev_valeria@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Garabito',
            'ape_materno' => 'Condori',
            'nombre' => 'Valeria Alejandra',
            'email' => 'gc_valeria_alejandra@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Garcia',
            'ape_materno' => 'Alave',
            'nombre' => 'Alvaro Jose',
            'email' => 'ga_alvaro@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Gomez',
            'ape_materno' => 'Pereira',
            'nombre' => 'Sharick Lia',
            'email' => 'gp_sharick@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Gonzales',
            'ape_materno' => 'Merida',
            'nombre' => 'Michel Jose Bernardo',
            'email' => 'gm_michel@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Jaillita',
            'ape_materno' => 'Aviles',
            'nombre' => 'Hadye Melanny',
            'email' => 'ja_hadye@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Jalil',
            'ape_materno' => 'Sermenio',
            'nombre' => 'Carlos Samir',
            'email' => 'js_carlos@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Marquina',
            'ape_materno' => 'La Fuente',
            'nombre' => 'Paola Andrea',
            'email' => 'ml_paola@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Mences',
            'ape_materno' => 'Teran',
            'nombre' => 'Dylan Victor',
            'email' => 'mt_dylan@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Monrroy',
            'ape_materno' => 'Rojas',
            'nombre' => 'Nicol Divanelly',
            'email' => 'mr_nocil@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Nina',
            'ape_materno' => 'Teran',
            'nombre' => 'Genesis Daniela',
            'email' => 'nt_genesis@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Paye',
            'ape_materno' => 'Caceres',
            'nombre' => 'Bryan Ricardo',
            'email' => 'pc_bryan@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Peredo',
            'ape_materno' => 'Saravia',
            'nombre' => 'Noelia Marcela',
            'email' => 'ps_noelia@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Peredo',
            'ape_materno' => 'Vasquez',
            'nombre' => 'Aliz',
            'email' => 'pv_aliz@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Porres',
            'ape_materno' => 'Teran',
            'nombre' => 'Paola Nicole',
            'email' => 'pt_paola@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Quiroz',
            'ape_materno' => 'Cosme',
            'nombre' => 'Jazmin Estrella',
            'email' => 'qc_jazmin@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Rios',
            'ape_materno' => 'Amurrio',
            'nombre' => 'Victor Andres',
            'email' => 'ra_victor@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Rojas',
            'ape_materno' => 'Torrico',
            'nombre' => 'Celine Allyse',
            'email' => 'rt_celine@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Simac',
            'ape_materno' => 'Ramos',
            'nombre' => 'Camila',
            'email' => 'sr_camila@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Terrazas',
            'ape_materno' => 'Castelo',
            'nombre' => 'Bruno',
            'email' => 'tc_bruno@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Tola',
            'ape_materno' => 'Cespedes',
            'nombre' => 'Heyshember Charles',
            'email' => 'tc_heyshember@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Tudela',
            'ape_materno' => 'Arze',
            'nombre' => 'David Andres',
            'email' => 'ta_david@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Valenzuela',
            'ape_materno' => 'Aruquipa',
            'nombre' => 'Elias Jahadiel',
            'email' => 'va_elias@ccc.edu.bo',]); $this->addGestion();
    }

}
