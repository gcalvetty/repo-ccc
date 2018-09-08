<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rude52SaludMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rude_5_2_salud', function (Blueprint $table) {
            $table->increments('sal_id');
            
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('user');
            
            $table->boolean('sal_centro');
            $table->unsignedTinyInteger('sal_frec');
            $table->unsignedTinyInteger('sal_disc1');
            $table->unsignedTinyInteger('sal_disc2');
            $table->unsignedTinyInteger('sal_disc3');
            $table->unsignedTinyInteger('sal_adq');
            $table->string('sal_discOtro',50);
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
        Schema::dropIfExists('rude_5_2_salud');
    }
}
