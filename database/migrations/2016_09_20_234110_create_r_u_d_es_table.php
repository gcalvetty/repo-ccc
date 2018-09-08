<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRUDEsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('RUDE', function (Blueprint $table) {
            $table->increments('rude_id');

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('user');

            $table->string('cod_rude',30);            
            $table->enum('tip_doc', ['Ninguno', 'C.I.', 'Pasaporte']);
            $table->string('num_doc',15);
            $table->date('fec_nac');
            $table->enum('sexo', ['Ninguno', 'M', 'F']);
            $table->enum('estado', ['Inscrito', 'No Inscrito']);
            $table->unsignedInteger('rue_num');
            $table->string('rue_nom', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('RUDE');
    }

}
