<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rude6Tutor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rude_6_tutor', function (Blueprint $table) {
            $table->increments('tut_id');
            
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('user');
            
            $table->string('ci_tut',15);
            $table->string('ape_tut',50);
            $table->string('nom_tut',50);     
            $table->enum('idim_tut', ['Castellano', 'Quechua', 'Aymara', 'Guarani', 'Ingles','Portugués']);
            $table->string('ocp_tut',50);
            $table->string('grd_tut',50);
            $table->string('paren_tut',50);
            
            $table->string('ci_madre',15);
            $table->string('ape_madre');
             $table->string('nom_madre');
            $table->string('idim_madre');
            $table->string('ocp_madre');
            $table->string('grd_madre');
             
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
        Schema::dropIfExists('rude_6_tutor');
    }
}
