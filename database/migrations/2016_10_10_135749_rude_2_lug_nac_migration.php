<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rude2LugNacMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rude_2_lug_nac', function (Blueprint $table) {
            $table->increments('ln_id');
            
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('user');
            
            $table->string('ln_pais',50);
            $table->string('ln_depa',50);
            $table->string('ln_prov',50);
            $table->string('ln_loc',50);
            $table->string('cn_oficialia',20);
            $table->string('cn_numlibro',20);
            $table->string('cn_numpartida',20);
            $table->string('cn_numfolio',20);            
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
        Schema::dropIfExists('rude_2_lug_nac');
    }
}
