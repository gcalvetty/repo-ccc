<?php

use Illuminate\Database\Seeder;
use sis_ccc\ModeloCCC\Grd_Nivel;

class AdmGrd_Nivel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(Grd_Nivel::class)->create([
            'grd_nivel_nombre' => 'Inicial',]);
        
        factory(Grd_Nivel::class)->create([
            'grd_nivel_nombre' => 'Primaria',]);
        
        factory(Grd_Nivel::class)->create([
            'grd_nivel_nombre' => 'Secundaria',]);
        
        factory(Grd_Nivel::class)->create([
            'grd_nivel_nombre' => 'Taller',]);
    }
}
