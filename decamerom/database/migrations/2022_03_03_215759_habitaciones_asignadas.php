<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HabitacionesAsignadas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //crear la migracion de la tabla donde se registraran los hoteles 
        Schema::create('habitaciones_asignadas', function (Blueprint $table) {
            $table->id();
            //crear la relacion con la tabla de ciudades
            $table->unsignedBigInteger('hotel_id');
            $table->foreign('hotel_id')->references('id')->on('hotel');
            $table->string('cantidad');
            $table->unsignedBigInteger('acomodacion_id');
            $table->foreign('acomodacion_id')->references('id')->on('acomodacion');
            $table->enum('state',['activo','inactivo'])->default('activo');
            
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
