<?php

use Illuminate\Database\Seeder;
use sis_ccc\User;
use sis_ccc\ModeloCCC\RUDE_1_Gestion;

class AdmTabEst_2SdrA extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $Aula = "A";
    public $Grado = "11"; // Pasa a: 3 Secundaria
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
        //2do de Secundaria A

        factory(User::class)->create([
            'ape_paterno' => 'Alanez',
            'ape_materno' => 'Mamani',
            'nombre' => 'Abdias Salomon',
            'email' => 'am_abdias@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Alegre',
            'ape_materno' => 'Yucra',
            'nombre' => 'Nayeli Adriana',
            'email' => 'ay_nayeli@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Antonio',
            'ape_materno' => 'Guzman',
            'nombre' => 'Brayan Misael',
            'email' => 'ag_brayan@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Aramayo',
            'ape_materno' => 'Cornejo',
            'nombre' => 'Karla Lorena',
            'email' => 'ac_karla@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Cabrera',
            'ape_materno' => 'Jaillita',
            'nombre' => 'Michael Brandon',
            'email' => 'cj_michael@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Calderon',
            'ape_materno' => 'Quispe',
            'nombre' => 'Willy Junior',
            'email' => 'cq_willy@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Callisaya',
            'ape_materno' => 'Antonio',
            'nombre' => 'Joyce Gabriela',
            'email' => 'ca_joyce@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Cardozo',
            'ape_materno' => 'Torrico',
            'nombre' => 'Branco',
            'email' => 'ct_branco@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Cardozo',
            'ape_materno' => 'Torrico',
            'nombre' => 'Brayan',
            'email' => 'ct_brayan@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Cardozo',
            'ape_materno' => 'Triveño',
            'nombre' => 'Mijail',
            'email' => 'ct_mijail@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Castro',
            'ape_materno' => 'Morales',
            'nombre' => 'Julio Alberto',
            'email' => 'cm_julio@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Chalco',
            'ape_materno' => 'Choque',
            'nombre' => 'Bryan Raymundo',
            'email' => 'ccbryan@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Cornejo',
            'ape_materno' => 'Perez',
            'nombre' => 'Jose Antonio',
            'email' => 'cp_jose@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Cuellar',
            'ape_materno' => 'Tomas',
            'nombre' => 'Brandon Omar',
            'email' => 'ct_brandon@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Espinoza',
            'ape_materno' => 'Quinteros',
            'nombre' => 'Ronald Maykyol',
            'email' => 'eq_ronald@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Flores',
            'ape_materno' => 'Prada',
            'nombre' => 'Manuel Alejandro',
            'email' => 'fp_manuel@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Gallego',
            'ape_materno' => 'Manzano',
            'nombre' => 'Jhon Khennedy',
            'email' => 'gm_jhon@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Gutierrez',
            'ape_materno' => 'Meneses',
            'nombre' => 'Nicol Gema',
            'email' => 'gm_nicol@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Justiniano',
            'ape_materno' => 'Magne',
            'nombre' => 'Gabriela',
            'email' => 'jm_gabriela@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Lopez',
            'ape_materno' => 'Illanes',
            'nombre' => 'Miguel Mateo',
            'email' => 'li_miguel@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Maizares',
            'ape_materno' => 'Rodriguez',
            'nombre' => 'Franco Emmanuel',
            'email' => 'mr_franco@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Meguillanes',
            'ape_materno' => 'Aguilar',
            'nombre' => 'Ismar Simon',
            'email' => 'ma_ismar@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Meneses',
            'ape_materno' => 'Rojas',
            'nombre' => 'Novicova Nataly',
            'email' => 'mr_novicova@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Montaño',
            'ape_materno' => 'Vellido',
            'nombre' => 'Jose Javier',
            'email' => 'mv_jose@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Rojas',
            'ape_materno' => '',
            'nombre' => 'Edilson',
            'email' => 'r_edilson@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Soliz',
            'ape_materno' => 'Soriano',
            'nombre' => 'Maria Rene',
            'email' => 'ss_maria@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Suarez',
            'ape_materno' => 'Quinteros',
            'nombre' => 'Nicole Alejandra',
            'email' => 'sq_nicole@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Zamorano',
            'ape_materno' => 'Terceros',
            'nombre' => 'Dylan',
            'email' => 'zt_dylan@ccc.edu.bo',]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Valverde',
            'ape_materno' => 'Choque',
            'nombre' => 'Arwen Dausset',
            'email' => 'vc_arwen@ccc.edu.bo',]); $this->addGestion();
    }

}
