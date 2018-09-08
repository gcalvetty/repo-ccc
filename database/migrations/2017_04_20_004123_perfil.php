<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Perfil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            /*
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users');           
            */
            $table->string('per_ci',15);
            $table->date('per_fec_nac');
            $table->enum('per_sexo', ['M', 'F']);
            
            $table->unsignedInteger('per_telf');
            $table->unsignedInteger('per_cel');
            $table->string('per_dir',200); 
            
            $table->string('per_avatar')->nullable;
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
        Schema::dropIfExists('perfil');
    }
}
