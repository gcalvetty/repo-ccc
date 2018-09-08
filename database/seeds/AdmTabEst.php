<?php

use Illuminate\Database\Seeder;
use sis_ccc\User;
use sis_ccc\ModeloCCC\RUDE;


class AdmTabEst extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::where('tipo_Usu', 'Est_ccc')->get();
        
        foreach ($users as $user) {
            factory(RUDE::class)->create([
            'user_id' => $user->id,               
            ]);
        }
    }
}
