<?php

use Illuminate\Database\Seeder;
use sis_ccc\ModeloCCC\Grd_Escolar;

class AdmGrd_Escolar extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
        
        factory(Grd_Escolar::class)->create([
            'grd_nombre' => '1ra Sección',
            'grd_orden' => '1',
        ]);
        factory(Grd_Escolar::class)->create([
            'grd_nombre' => '2da Sección',
            'grd_orden' => '1',
        ]);
        // ---- PRIMARIA ----
        factory(Grd_Escolar::class)->create([
            'grd_nombre' => '1ra Primaria',
            'grd_orden' => '2',
        ]);
        factory(Grd_Escolar::class)->create([
            'grd_nombre' => '2do Primaria',
            'grd_orden' => '2',
        ]);
        
        factory(Grd_Escolar::class)->create([
            'grd_nombre' => '3ra Primaria',
            'grd_orden' => '2',
        ]);
        factory(Grd_Escolar::class)->create([
            'grd_nombre' => '4ta Primaria',
            'grd_orden' => '2',
        ]);
        factory(Grd_Escolar::class)->create([
            'grd_nombre' => '5to Primaria',
            'grd_orden' => '2',
        ]);
        factory(Grd_Escolar::class)->create([
            'grd_nombre' => '6to Primaria',
            'grd_orden' => '2',
        ]);
        // ---- Secundaria ----
        factory(Grd_Escolar::class)->create([
            'grd_nombre' => '1ra Secundaria',
            'grd_orden' => '3',
        ]);
        factory(Grd_Escolar::class)->create([
            'grd_nombre' => '2do Secundaria',
            'grd_orden' => '3',
        ]);
        factory(Grd_Escolar::class)->create([
            'grd_nombre' => '3ra Secundaria',
            'grd_orden' => '3',
        ]);
        factory(Grd_Escolar::class)->create([
            'grd_nombre' => '4ta Secundaria',
            'grd_orden' => '3',
        ]);
        factory(Grd_Escolar::class)->create([
            'grd_nombre' => '5to Secundaria',
            'grd_orden' => '3',
        ]);
        factory(Grd_Escolar::class)->create([
            'grd_nombre' => '6to Secundaria',
            'grd_orden' => '3',
        ]);
        
        // ---- Taller Incial ----
       factory(Grd_Escolar::class)->create([
            'grd_nombre' => 'Inicial',
            'grd_orden' => '4',
        ]); 
    }
}
