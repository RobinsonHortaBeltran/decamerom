<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ciudades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //crear la migracion de la tabla de ciudades
        Schema::create('ciudades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
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
