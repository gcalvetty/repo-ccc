<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GrdEscolarMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grd_escolar', function (Blueprint $table) {
            $table->increments('grd_id');
            $table->string('grd_nombre',20);
            $table->unsignedInteger('grd_orden');
            
            $table->foreign('grd_orden')
                    ->references('grd_nivel_id')
                      ->on('grd_nivel');
            
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
        Schema::dropIfExists('grd_escolar');
    }
}
