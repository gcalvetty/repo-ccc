<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rude53SerbasicosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rude_5_3_serbasicos', function (Blueprint $table) {
            $table->increments('ser_id');
            
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('user');
            
            // --- Lista de servicio de agua
            $table->unsignedTinyInteger('ser_agua'); 
            $table->enum('ser_energia',['si','no']);
            $table->unsignedTinyInteger('ser_letrina');
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
        Schema::dropIfExists('rude_5_3_serbasicos');
    }
}
