<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrenador', function (Blueprint $table) {
            $table->id('identificacion_Entrenador');
            $table->string('nombre_Entre', 50);
            $table->string('apellido_Entre', 50);
            $table->date('fecha_Nac_Entre');
            $table->integer('telefono_Entre');
            $table->string('direccion_Entre', 20);
            $table->boolean('estado_Entre');
            $table->BigInteger('identificacion_Usuario_FK')->unsigned()->unique();

            $table->foreign('identificacion_Usuario_FK')->references('identificacion_Usuario')->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entrenador');
    }
};
