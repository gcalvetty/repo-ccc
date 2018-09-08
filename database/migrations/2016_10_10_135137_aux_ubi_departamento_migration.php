<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AuxUbiDepartamentoMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aux_ubi_departamento', function (Blueprint $table) {
            $table->increments('dep_id');
            $table->unsignedtinyInteger('dep_idPais');
            $table->string('dep_nombre',50);
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
        Schema::dropIfExists('aux_ubi_departamento');
    }
}
