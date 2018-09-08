<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rude55InternetMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rude_5_5_internet', function (Blueprint $table) {
            $table->increments('int_id');
            
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('user');
            
            // --- Lista de lugares donde accede a internet
            $table->unsignedTinyInteger('int_lug'); 
            $table->unsignedTinyInteger('int_frecuencia');
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
        Schema::dropIfExists('rude_5_5_internet');
    }
}
