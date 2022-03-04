<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class habitaciones_asignadas extends Model
{
    protected $table="habitaciones_asignadas";
    protected $fillable = ['id','hotel','cantidad','tipo_habitacion','acomodacion','state'];

    //traer los datos de la acomodacion de las habitaciones
    public function acomodacion_habitacion(){
        return $this->hasMany(acomodacion::class,'id','acomodacion_id');
    }
}
