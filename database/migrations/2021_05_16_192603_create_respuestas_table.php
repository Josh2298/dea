<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->id();
            $table->integer('iddato');
            $table->integer('CO_1_P1');
            $table->integer('CO_1_P2');
            $table->integer('CO_1_P3');
            $table->integer('CO_1_P4');
            $table->integer('CO_1_P5');
            $table->integer('CO_2_P1');
            $table->integer('CO_2_P2');
            $table->integer('CO_2_P3');
            $table->integer('CO_2_P4');
            $table->integer('CO_2_P5');
            $table->integer('CO_3_P1');
            $table->integer('CO_3_P2');
            $table->integer('CO_3_P3');
            $table->integer('CUA_1_P1');
            $table->integer('CUA_1_P2');
            $table->integer('CUA_1_P3');
            $table->integer('CUA_2_P1');
            $table->integer('CUA_2_P2');
            $table->integer('CUA_2_P3');
            $table->integer('CUA_2_P4');
            $table->integer('CUA_3_P1');
            $table->integer('CUA_3_P2');
            $table->integer('CUA_3_P3');
            $table->integer('CUA_3_P4');
            $table->integer('CUA_3_P5');
            $table->integer('CUA_4_P1');
            $table->integer('CUA_4_P2');
            $table->integer('CUA_4_P3');
            $table->integer('CUM_1_P1');
            $table->integer('CUM_2_P1');
            $table->integer('CUM_2_P2');
            $table->foreign('iddato')->references('id')->on('datos')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('respuestas');
    }
}
