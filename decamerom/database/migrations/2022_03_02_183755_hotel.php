<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Hotel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //crear la migracion de la tabla donde se registraran los hoteles 
        Schema::create('hotel', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('direccion');
            $table->string('nit');
            $table->string('telefono');
            $table->string('correo');
            $table->string('num_habitaciones');
            $table->enum('state',['activo','inactivo'])->default('activo');
            //crear la relacion con la tabla de ciudades
            $table->unsignedBigInteger('ciudad_id');
            $table->foreign('ciudad_id')->references('id')->on('ciudades');
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
