<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rude4DireccionMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rude_4_direccion', function (Blueprint $table) {
            $table->increments('dir_id');
            
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('user');
            
            $table->string('dir_prv',30);
            $table->string('dir_loc',30);
            $table->string('dir_mun',30);
            $table->string('dir_zon',30);
            $table->string('dir_calle_ave',80);
            $table->unsignedInteger('dir_telf');
            $table->unsignedInteger('dir_cel');
            $table->string('dir_num_viv',15);
            $table->string('dir_gmap',255);
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
        Schema::dropIfExists('rude_4_direccion');
    }
}
