<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rude1Gestion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rude_1_gestion', function (Blueprint $table) {
            $table->increments('gst_id');
            
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('user');
            
            $table->unsignedInteger('gst_grd_escolar');  // --- Curso
            $table->enum('gst_aula',['A','AA']);         // --- aula             
            $table->unsignedInteger('gst_gestion');      // --- Año            
            
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
        Schema::dropIfExists('rude_1_gestion');
    }
}
