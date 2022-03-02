<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class acomodacion extends Model
{
    use HasFactory;
    protected $table="acomodacion";
    protected $fillable = ['id','nombre','state'];
}
