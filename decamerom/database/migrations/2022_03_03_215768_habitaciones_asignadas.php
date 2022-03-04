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
            $table->string('hotel');
            $table->string('cantidad');
            $table->string('tipo_habitacion');
            $table->string('acomodacion');
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
