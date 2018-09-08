<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCccAvatarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cccavatars', function (Blueprint $table) {
            $table->increments('av_id');
            
            $table->integer('av_rude');
            $table->foreign('av_rude')->references('cod_rude')->on('rude');
            
                       
            $table->unsignedInteger('av_escolar');
            $table->foreign('av_escolar')->references('grd_id')->on('grd_escolar');
            
            
            $table->unsignedInteger('av_paralelo');
            $table->foreign('av_paralelo')->references('grd_par_id')->on('grd_paralelo');
            
            
            $table->string('av_avatar');
            
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
        Schema::dropIfExists('cccavatars');
    }
}
