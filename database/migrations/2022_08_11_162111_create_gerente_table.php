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
        Schema::create('gerente', function (Blueprint $table) {
            $table->id('identificacion_Gerente');
            $table->string('nombre_Geren', 50);
            $table->string('apellido_Geren', 50);
            $table->date('fecha_Nac_Geren');
            $table->integer('telefono_Geren');
            $table->string('direccion_Geren', 20);
            $table->boolean('estado_Geren');
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
        Schema::dropIfExists('gerente');
    }
};
