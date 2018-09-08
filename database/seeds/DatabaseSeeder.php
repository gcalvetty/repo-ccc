<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // ---- Creamos los usuarios 
        $this->call(userTableSeeder::class);
        
        // ---- Taller Inicial
        $this->call(AdmTabEst_TallerInicial::class);
        
        // ---- Inicia
        $this->call(AdmTabEst_1SecA::class);
        $this->call(AdmTabEst_1SecAA::class);

        $this->call(AdmTabEst_2SecA::class);
        $this->call(AdmTabEst_2SecAA::class);

        // ---- Primaria
        $this->call(AdmTabEst_1PrimA::class);
        $this->call(AdmTabEst_1PrimAA::class);
        $this->call(AdmTabEst_2PrimA::class);
        $this->call(AdmTabEst_2PrimAA::class);
        $this->call(AdmTabEst_3PrimA::class);
        $this->call(AdmTabEst_4PrimA::class);
        $this->call(AdmTabEst_5PrimA::class);
        $this->call(AdmTabEst_6PrimA::class);

        // ---- Secundaria
        $this->call(AdmTabEst_1SdrA::class);
        $this->call(AdmTabEst_1SdrAA::class);
        $this->call(AdmTabEst_2SdrA::class);
        $this->call(AdmTabEst_3SdrA::class);
        $this->call(AdmTabEst_4SdrA::class);
        $this->call(AdmTabEst_5SdrA::class);
        $this->call(AdmTabEst_6SdrA::class);
         
        
        // ---- Adicionamos datos al RUDE
        $this->call(AdmTabEst::class);
        
        // ---- Adicionamos datos de Cursos y Nivel ---
        $this->call(AdmGrd_Escolar::class);
        $this->call(AdmGrd_Nivel::class);
        
        $this->call(VoyagerDatabaseSeeder::class);
        $this->call(VoyagerDummyDatabaseSeeder::class);
        
    }

}
