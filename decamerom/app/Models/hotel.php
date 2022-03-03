<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
    use HasFactory;
    protected $table = "hotel";
    protected $fillable = ['id', 'nombre', 'direccion', 'nit', 'telefono', 'correo', 'num_habitaciones', 'state', 'ciudad_id'];
    //traer los datos de la ciudad en la que se registro el hotel
    public function ciudad(){
        return $this->hasMany(ciudad::class,'id','ciudad_id');
    }
}
