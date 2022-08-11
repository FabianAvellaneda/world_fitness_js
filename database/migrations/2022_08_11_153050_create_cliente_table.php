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
        Schema::create('cliente', function (Blueprint $table) {
            $table->id('identificacion_Cliente');
            $table->string('nombre_Clie', 50);
            $table->string('apellido_Clie', 50);
            $table->date('fecha_Nac_Clie');
            $table->Biginteger('telefono_Clie');
            $table->string('direccion_Clie', 20);
            $table->boolean('estado_Clie');
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
        Schema::dropIfExists('cliente');
    }
};
