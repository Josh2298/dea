<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailDatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_datos', function (Blueprint $table) {
            $table->id();
            $table->integer('iddato');
            $table->integer('idemail');
            $table->foreign('iddato')->references('id')->on('datos')->onDelete('cascade');
            $table->foreign('idemail')->references('id')->on('datos')->onDelete('cascade');
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
        Schema::dropIfExists('email_datos');
    }
}
