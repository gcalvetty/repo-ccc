<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id'); 
            
            $table->string('nombre',50);
            $table->string('ape_paterno',50);
            $table->string('ape_materno',50);                                    
            
            $table->string('email')->unique();
            $table->string('password');
            
            $table->enum('tipo_Usu',['SuperAdm','Admtr',
                            'Cont',
                            'JPer',
                            'Dir',
                            'Prof',
                            'Secr',
                            'Rege',
                            'Est_ccc',
                            'Tut_ccc',
                         ]);            
            $table->enum('activo',['no','si']);
            $table->string('verf_token')->nullable();
            $table->timestamp('ult_Acceso')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
