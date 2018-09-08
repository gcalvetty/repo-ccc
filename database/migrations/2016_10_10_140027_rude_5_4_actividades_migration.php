<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rude54ActividadesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rude_5_4_actividades', function (Blueprint $table) {
            $table->increments('act_id');
            
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('user');
            
            // --- Lista de actividades realizadas
            $table->unsignedTinyInteger('act_realizada'); 
            $table->unsignedTinyInteger('act_diastrab');
            $table->enum('recpago',['si','no']);
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
        Schema::dropIfExists('rude_5_4_actividades');
    }
}
