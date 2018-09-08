<?php

use Illuminate\Database\Seeder;
use sis_ccc\User;

class userTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // ---- USUARIOS ----
        factory(User::class)->create([
            'ape_paterno' => 'Calvetty', 'ape_materno' => 'Nuñez', 'nombre' => 'Guillermo Elias',
            'email' => 'gcalvetty@gmail.com',
            'password' => bcrypt('123123'), 'tipo_Usu' => 'SuperAdm', 'activo' => 'si'
        ]);

        // ---- Administración ----
        factory(User::class)->create([
            'ape_paterno' => 'Duk', 'ape_materno' => 'Suh', 'nombre' => 'Sung',
            'email' => 'ds_sung@ccc.edu.bo',
            'password' => bcrypt('dss_admtr2k17'), 'tipo_Usu' => 'Admtr', 'activo' => 'si'
        ]);

        factory(User::class)->create([
            'ape_paterno' => 'Jem', 'ape_materno' => 'Youn', 'nombre' => 'Hae',
            'email' => 'jy_hae@ccc.edu.bo',
            'password' => bcrypt('jyh_admtr2k17'), 'tipo_Usu' => 'Admtr', 'activo' => 'si'
        ]);

        // ---- Dirección ----
        factory(User::class)->create([
            'ape_paterno' => 'Saúl', 'ape_materno' => 'Mercado', 'nombre' => 'José',
            'email' => 'sm_jose@ccc.edu.bo',
            'password' => bcrypt('smj_dir2k17'), 'tipo_Usu' => 'Dir', 'activo' => 'si'
        ]);

        factory(User::class)->create([
            'ape_paterno' => 'Zambrana', 'ape_materno' => 'Villalta', 'nombre' => 'Nelson A.',
            'email' => 'zv_nelson@ccc.edu.bo',
            'password' => bcrypt('zvn_dir2k17'), 'tipo_Usu' => 'Dir', 'activo' => 'si'
        ]);

        // ---- Contador ----   
        factory(User::class)->create([
            'ape_paterno' => 'Segarrundo', 'ape_materno' => 'Condori', 'nombre' => 'Jose Luis',
            'email' => 'sc_jose@ccc.edu.bo',
            'password' => bcrypt('SCJL_cont2k17'), 'tipo_Usu' => 'Cont', 'activo' => 'no'
        ]);


        // ---- Jefe de Personal ----         
        factory(User::class)->create([
            'ape_paterno' => 'Cadima', 'ape_materno' => 'Roque', 'nombre' => 'Jose Luis',
            'email' => 'cr_jose@ccc.edu.bo',
            'password' => bcrypt('CRJL_jper2k17'), 'tipo_Usu' => 'Jper', 'activo' => 'no'
        ]);

        // ---- Secretaría ----
        // Marlene Sanchez Torrez
        factory(User::class)->create([
            'ape_paterno' => 'Sanchez', 'ape_materno' => 'Torrez', 'nombre' => 'Marlene',
            'email' => 'st_marlene@ccc.edu.bo',
            'password' => bcrypt('STM_secr2k17'), 'tipo_Usu' => 'Secr', 'activo' => 'no'
        ]);

        // ---- Regente ----
        // Enzo Roberto Vargas Angulo
        /*factory(User::class)->create([
            'ape_paterno' => 'Vargas', 'ape_materno' => 'Angulo', 'nombre' => 'Enzo Roberto',
            'email' => 'va_enzo@ccc.edu.bo',
            'password' => bcrypt('VAE_rege2k17'), 'tipo_Usu' => 'Rege', 'activo' => 'no'
        ]);*/

        // ---- Psicología ----
        // Claudia Poma Tenorio
        /*factory(User::class)->create([
            'ape_paterno' => 'Claudia', 'ape_materno' => 'Poma', 'nombre' => 'Tenorio',
            'email' => 'cp_tenorio@ccc.edu.bo',
            'password' => bcrypt('prof_2k17'), 'tipo_Usu' => 'Prof', 'activo' => 'no'
        ]);*/


        // ---- Profesores Taller ----
        // Paniagua Villca Sorayda
        factory(User::class)->create([
            'ape_paterno' => 'Panigua', 'ape_materno' => 'Villca', 'nombre' => 'Sorayda',
            'email' => 'pv_sorayda@@ccc.edu.bo',
            'password' => bcrypt('prof_2k17'), 'tipo_Usu' => 'Prof', 'activo' => 'no'
        ]);

        // ---- Inicial ----
        // Butron Urbina Primitiva 
        // Medrano Barea María del Rosario
        // Olivera Ferrufino Carmen Fabiola
        factory(User::class)->create([
            'ape_paterno' => 'Butron', 'ape_materno' => 'Urbina', 'nombre' => 'Primitiva',
            'email' => 'bu_primitiva@ccc.edu.bo',
            'password' => bcrypt('prof_2k17'), 'tipo_Usu' => 'Prof', 'activo' => 'no'
        ]);

        factory(User::class)->create([
            'ape_paterno' => 'Medrano', 'ape_materno' => 'Barea', 'nombre' => 'María del Rosario',
            'email' => 'mb_maria@ccc.edu.bo',
            'password' => bcrypt('prof_2k17'), 'tipo_Usu' => 'Prof', 'activo' => 'no'
        ]);

        factory(User::class)->create([
            'ape_paterno' => 'Olivera', 'ape_materno' => 'Ferrufino', 'nombre' => 'Carmen Fabiola',
            'email' => 'of_carmen@ccc.edu.bo',
            'password' => bcrypt('prof_2k17'), 'tipo_Usu' => 'Prof', 'activo' => 'no'
        ]);

        // ---- Ingles ----
        // Lazarte Torrez Sara
        // Campos Flores Jhilka
        // Gutierrez Llanque Silvia
        // Mercado Huarachi José
        // Virreira Bazualdo Claudia
        factory(User::class)->create([
            'ape_paterno' => 'Lazarte', 'ape_materno' => 'Torrez', 'nombre' => 'Sara',
            'email' => 'lt_sara@ccc.edu.bo',
            'password' => bcrypt('prof_2k17'), 'tipo_Usu' => 'Prof', 'activo' => 'no'
        ]);
        factory(User::class)->create([
            'ape_paterno' => 'Campos', 'ape_materno' => 'Flores', 'nombre' => 'Jhilka',
            'email' => 'cf_jhilka@ccc.edu.bo',
            'password' => bcrypt('prof_2k17'), 'tipo_Usu' => 'Prof', 'activo' => 'no'
        ]);
        factory(User::class)->create([
            'ape_paterno' => 'Gutierrez', 'ape_materno' => 'Llanque', 'nombre' => 'Silvia',
            'email' => 'gl_silvia@ccc.edu.bo',
            'password' => bcrypt('prof_2k17'), 'tipo_Usu' => 'Prof', 'activo' => 'no'
        ]);
        factory(User::class)->create([
            'ape_paterno' => 'Mercado', 'ape_materno' => 'Huarchi', 'nombre' => 'José',
            'email' => 'mh_jose@ccc.edu.bo',
            'password' => bcrypt('prof_2k17'), 'tipo_Usu' => 'Prof', 'activo' => 'no'
        ]);
        factory(User::class)->create([
            'ape_paterno' => 'Virreira', 'ape_materno' => 'Bazualdo', 'nombre' => 'Claudia',
            'email' => 'vb_claudia@ccc.edu.bo',
            'password' => bcrypt('prof_2k17'), 'tipo_Usu' => 'Prof', 'activo' => 'no'
        ]);

        // ---- Educación Fisica ----
        // García Sanchez Madelen Regina
        // Yujra Lopez Franz
        factory(User::class)->create([
            'ape_paterno' => 'García', 'ape_materno' => 'Sanchez', 'nombre' => 'Madelen Regina',
            'email' => 'gs_madelen@ccc.edu.bo',
            'password' => bcrypt('prof_2k17'), 'tipo_Usu' => 'Prof', 'activo' => 'no'
        ]);
        factory(User::class)->create([
            'ape_paterno' => 'Yujra', 'ape_materno' => 'Lopez', 'nombre' => 'Franz',
            'email' => 'yl_franz@ccc.edu.bo',
            'password' => bcrypt('prof_2k17'), 'tipo_Usu' => 'Prof', 'activo' => 'no'
        ]);

        // ---- Educación Músical ----
        // Roman Gutierrez Waldo
        factory(User::class)->create([
            'ape_paterno' => 'Roman', 'ape_materno' => 'Gutierrez', 'nombre' => 'Waldo',
            'email' => 'rg_waldo@ccc.edu.bo',
            'password' => bcrypt('prof_2k17'), 'tipo_Usu' => 'Prof', 'activo' => 'no'
        ]);

        // ---- Computación ----
        // Triveño Costas J. Ramiro
        factory(User::class)->create([
            'ape_paterno' => 'Triveño', 'ape_materno' => 'Costas', 'nombre' => 'J. Ramiro',
            'email' => 'tc_ramiro@ccc.edu.bo',
            'password' => bcrypt('prof_2k17'), 'tipo_Usu' => 'Prof', 'activo' => 'no'
        ]);
        // ---- Educación Cristiana ----
        // Clavijo Romero Carlos
        factory(User::class)->create([
            'ape_paterno' => 'Clavijo', 'ape_materno' => 'Romero', 'nombre' => 'Carlos',
            'email' => 'cr_carlos@ccc.edu.bo',
            'password' => bcrypt('prof_2k17'), 'tipo_Usu' => 'Prof', 'activo' => 'no'
        ]);
        // ---- Artes Plasticas ----
        // Angulo Orosco Omar
        factory(User::class)->create([
            'ape_paterno' => 'Angulo', 'ape_materno' => 'Orosco', 'nombre' => 'Omar',
            'email' => 'ao_omar@ccc.edu.bo',
            'password' => bcrypt('prof_2k17'), 'tipo_Usu' => 'Prof', 'activo' => 'no'
        ]);
        // ---- Matematicas ----
        // Garcia Laredo Martha
        // Mariño Huarachi Jaime
        factory(User::class)->create([
            'ape_paterno' => 'Garcia', 'ape_materno' => 'Laredo', 'nombre' => 'Martha',
            'email' => 'gl_martha@ccc.edu.bo',
            'password' => bcrypt('prof_2k17'), 'tipo_Usu' => 'Prof', 'activo' => 'no'
        ]);
        factory(User::class)->create([
            'ape_paterno' => 'Mariño', 'ape_materno' => 'Huarachi', 'nombre' => 'Jaime',
            'email' => 'mh_jaime@ccc.edu.bo',
            'password' => bcrypt('prof_2k17'), 'tipo_Usu' => 'Prof', 'activo' => 'no'
        ]);

        // ---- Leng. Quechua ----
        // Mamani Cotaña Nelly
        factory(User::class)->create([
            'ape_paterno' => 'Mamani', 'ape_materno' => 'Cotaña', 'nombre' => 'Nelly',
            'email' => 'mc_nelly@ccc.edu.bo',
            'password' => bcrypt('prof_2k17'), 'tipo_Usu' => 'Prof', 'activo' => 'no'
        ]);
        // ---- Biologia ----
        // Nieves Arriaran Greissy
        factory(User::class)->create([
            'ape_paterno' => 'Nieves', 'ape_materno' => 'Arriaran', 'nombre' => 'Greissy',
            'email' => 'na_greissy@ccc.edu.bo',
            'password' => bcrypt('prof_2k17'), 'tipo_Usu' => 'Prof', 'activo' => 'no'
        ]);

        // ---- Sociales ----
        // Caceres Mamani Fernando
        factory(User::class)->create([
            'ape_paterno' => 'Caceres', 'ape_materno' => 'Mamani', 'nombre' => 'Fernando',
            'email' => 'cm_fernando@ccc.edu.bo',
            'password' => bcrypt('prof_2k17'), 'tipo_Usu' => 'Prof', 'activo' => 'no'
        ]);
        // ---- Quimica Fisica ----
        // Saravia Gonzales Marco A.
        factory(User::class)->create([
            'ape_paterno' => 'Saravia', 'ape_materno' => 'Gonzales', 'nombre' => 'Marco A.',
            'email' => 'sg_marco@ccc.edu.bo',
            'password' => bcrypt('prof_2k17'), 'tipo_Usu' => 'Prof', 'activo' => 'no'
        ]);
        // ---- Primaria ----
        // Guzmán Funes María Eugenia
        // Terceros Carla Eliana
        // Agudo Fuentes Florencia
        // Perez Cuillave Lizeth
        // Tejerina Casablanca Jannet
        // Rodriguez Mamani Ruth
        // Rodriguez Orosco Marco Antonio 
        factory(User::class)->create([
            'ape_paterno' => 'Guzmán', 'ape_materno' => 'Funes', 'nombre' => 'María Eugenia',
            'email' => 'gf_maria@ccc.edu.bo',
            'password' => bcrypt('prof_2k17'), 'tipo_Usu' => 'Prof', 'activo' => 'no'
        ]);
        factory(User::class)->create([
            'ape_paterno' => 'Terceros', 'ape_materno' => 'Carla', 'nombre' => 'Eliana',
            'email' => 'tc_eliana@ccc.edu.bo',
            'password' => bcrypt('prof_2k17'), 'tipo_Usu' => 'Prof', 'activo' => 'no'
        ]);
        factory(User::class)->create([
            'ape_paterno' => 'Agudo', 'ape_materno' => 'Fuentes', 'nombre' => 'Florencia',
            'email' => 'af_florencia@ccc.edu.bo',
            'password' => bcrypt('prof_2k17'), 'tipo_Usu' => 'Prof', 'activo' => 'no'
        ]);
        factory(User::class)->create([
            'ape_paterno' => 'Perez', 'ape_materno' => 'Cuillave', 'nombre' => 'Lizeth',
            'email' => 'pc_lizeth@ccc.edu.bo',
            'password' => bcrypt('prof_2k17'), 'tipo_Usu' => 'Prof', 'activo' => 'no'
        ]);
        factory(User::class)->create([
            'ape_paterno' => 'Tejerina', 'ape_materno' => 'Casablanca', 'nombre' => 'Jannet',
            'email' => '@ccc.edu.bo',
            'password' => bcrypt('prof_2k17'), 'tipo_Usu' => 'Prof', 'activo' => 'no'
        ]);
        factory(User::class)->create([
            'ape_paterno' => 'Rodriguez', 'ape_materno' => 'Mamani', 'nombre' => 'Ruth',
            'email' => 'rm_ruth@ccc.edu.bo',
            'password' => bcrypt('prof_2k17'), 'tipo_Usu' => 'Prof', 'activo' => 'no'
        ]);
        factory(User::class)->create([
            'ape_paterno' => 'Rodriguez', 'ape_materno' => 'Orosco', 'nombre' => 'Marco Antonio',
            'email' => 'ro_marco@ccc.edu.bo',
            'password' => bcrypt('prof_2k17'), 'tipo_Usu' => 'Prof', 'activo' => 'no'
        ]);
        
        // **********************************
        
        factory(User::class)->create([
            'ape_paterno' => 'Serv. 1', 'ape_materno' => 'CCC', 'nombre' => 'Inscripción',
            'email' => 'serv_inscr1@ccc.edu.bo',
            'password' => bcrypt('insc1_2k17'), 'tipo_Usu' => 'Secr', 'activo' => 'no'
        ]);
        factory(User::class)->create([
            'ape_paterno' => 'Serv. 2', 'ape_materno' => 'CCC', 'nombre' => 'Inscripción',
            'email' => 'serv_inscr2@ccc.edu.bo',
            'password' => bcrypt('insc2_2k17'), 'tipo_Usu' => 'Secr', 'activo' => 'no'
        ]);
        factory(User::class)->create([
            'ape_paterno' => 'Serv. 3', 'ape_materno' => 'CCC', 'nombre' => 'Inscripción',
            'email' => 'serv_inscr3@ccc.edu.bo',
            'password' => bcrypt('insc3_2k17'), 'tipo_Usu' => 'Secr', 'activo' => 'no'
        ]);
        
    }

}
