<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_habitacion extends Model
{
    use HasFactory;
    protected $table="tipo_habitacion";
    protected $fillable = ['id','nombre','state','acomodacion_id'];

    //traer los datos de la acomodacion de las habitaciones
    public function acomodacion_habitacion(){
        return $this->hasMany(acomodacion::class,'id','acomodacion_id');
    }
}
