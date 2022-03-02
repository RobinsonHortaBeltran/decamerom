<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tipo_habitacion;

class IndexController extends Controller
{
    public function get_habitaciones()
    {
        $tipos=  tipo_habitacion::with('acomodacion_habitacion')->orderBy('id', 'ASC')->get();   
        try {
            return response()->json($tipos, 200);
        } catch (\Exception $e) {
            return " Error: " . $e->getMessage();
        } 
    }
}
