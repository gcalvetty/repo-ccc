<?php

use Illuminate\Database\Seeder;
use sis_ccc\User;
use sis_ccc\ModeloCCC\RUDE_1_Gestion;

class AdmTabEst_TallerInicial extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $Aula = "A";
    public $Grado = "1"; // Pasa a: 1 Seccion
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
        // 1 Sección A
        factory(User::class)->create([
            'ape_paterno' => 'Ardaya',
            'ape_materno' => 'Pereira',
            'nombre' => 'Jeanice',
            'email' => 'ap_jeanice@ccc.edu.bo',
        ]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Ichota',
            'ape_materno' => 'Heredia',
            'nombre' => 'Misael Osue',
            'email' => 'ih_jeanice@ccc.edu.bo',
        ]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Loza',
            'ape_materno' => 'Morales',
            'nombre' => 'Carlos Gabriel',
            'email' => 'lm_carlos@ccc.edu.bo',
        ]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Muriel',
            'ape_materno' => 'Illanes',
            'nombre' => 'Kiara',
            'email' => 'mi_kiara@ccc.edu.bo',
        ]); $this->addGestion();
        factory(User::class)->create([
            'ape_paterno' => 'Rengel',
            'ape_materno' => 'Justiniano',
            'nombre' => 'Sofia Ingrid',
            'email' => 'rj_sofia@ccc.edu.bo',
        ]); $this->addGestion();
    }

}
