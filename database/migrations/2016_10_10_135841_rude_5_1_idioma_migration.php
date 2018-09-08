<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rude51IdiomaMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rude_5_1_idioma', function (Blueprint $table) {
            $table->increments('idi_id');
            
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('user');
            
            $table->enum('idi_habl', ['Ninguno','Castellano', 'Quechua', 'Aymara', 'Guarani', 'Ingles','Portugués']);
            
            // --- Lista de Idiomas que habla
            $table->enum('idi_habl1', ['Ninguno','Castellano', 'Quechua', 'Aymara', 'Guarani', 'Ingles','Portugués']);
            $table->enum('idi_habl2', ['Ninguno','Castellano', 'Quechua', 'Aymara', 'Guarani', 'Ingles','Portugués']);
            $table->enum('idi_habl3', ['Ninguno','Castellano', 'Quechua', 'Aymara', 'Guarani', 'Ingles','Portugués']);            
            
            $table->unsignedTinyInteger('idi_nacion');
            $table->string('idi_nacion2',30);
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
        Schema::dropIfExists('rude_5_1_idioma');
    }
}
