<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TipoHabitacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //crear la migracion para la tabla de tipos de habitaciones
        Schema::create('tipo_habitacion', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->enum('state',['activo','inactivo'])->default('activo');
            $table->unsignedBigInteger('acomodacion_id');
            $table->foreign('acomodacion_id')->references('id')->on('acomodacion');
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
        //
    }
}
