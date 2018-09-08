<?php

/*
  |--------------------------------------------------------------------------
  | Model Factories
  |--------------------------------------------------------------------------
  |
  | Here you may define all of your model factories. Model factories give
  | you a convenient way to create models for testing and seeding your
  | database. Just tell the factory how a default model should look.
  |
 */

$factory->define(sis_ccc\User::class, function (Faker\Generator $faker) {
    //static $password;
    
    return [
        'ape_paterno' => $faker->firstName,
        'ape_materno' => $faker->lastName,
        'nombre' => $faker->name,        
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('123123'),
        'tipo_Usu' => 'Est_ccc',
        'activo' => 'si'
    ];
});


$factory->define(sis_ccc\ModeloCCC\RUDE::class, function(Faker\Generator $faker) {  
    return [
        'user_id' => 1,
        'cod_rude' => 0,
        'tip_doc' => 'Ninguno',
        'num_doc' => 0,
        'fec_nac' => '1000-01-01',
        'sexo' => 'Ninguno',
        'estado' => $faker->randomElement(['No Inscrito']),      
        'rue_num' => 0,      
        'rue_nom' => '',      
    ];
});

$factory->define(sis_ccc\ModeloCCC\RUDE_2_Lug_Nac::class, function(Faker\Generator $faker) {  
    return [
        'user_id' => 1,
        'ln_pais' => '',
        'ln_depa' => '',
        'ln_prov' => '',
        'ln_loc' => '',
        'cn_oficialia' => 0,
        'cn_numlibro'   => 0,
        'cn_numpartida' => 0,
        'cn_numfolio'   => 0,
        
    ];
});

$factory->define(sis_ccc\ModeloCCC\RUDE_1_Gestion::class, function(Faker\Generator $faker) {  
    return [
        'user_id' => 1,
        'gst_grd_escolar' => $faker->numberBetween(1, 15),
        'gst_gestion' => 2017,
        'gst_aula' => $faker->randomElement(['A']),
    ];
});




$factory->define(\sis_ccc\ModeloCCC\Grd_Nivel::class, function (Faker\Generator $faker) {
    //static $password;
    
    return [
        'grd_nivel_nombre' => $faker->company,
    ];
});

$factory->define(\sis_ccc\ModeloCCC\Grd_Escolar::class, function (Faker\Generator $faker) {
    //static $password;
    
    return [
        'grd_nombre' => $faker->company,
        'grd_orden'  => $faker->randomElement(['1', '2', '3', '4', '5']),
    ];
});