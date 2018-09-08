<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRUEsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RUE', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo');
            $table->string('nombre');
            $table->string('distrito');
            $table->string('dependencia');
            $table->boolean('inicial');
            $table->boolean('primaria');
            $table->boolean('secundaria');
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
        Schema::dropIfExists('RUE');
    }
}
