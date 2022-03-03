<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tipo_habitacion;
use App\Models\ciudades;
use App\Models\hotel;

class IndexController extends Controller
{
    public function get_habitaciones()
    {
        $tipos =  tipo_habitacion::with('acomodacion_habitacion')->orderBy('id', 'ASC')->get();
        try {
            return response()->json($tipos, 200);
        } catch (\Exception $e) {
            return " Error: " . $e->getMessage();
        }
    }
    public function get_ciudades()
    {
        $ciudades =  ciudades::all();
        try {
            return response()->json($ciudades, 200);
        } catch (\Exception $e) {
            return " Error: " . $e->getMessage();
        }
    }

    public function create_hotel(Request $request)
    {
        // $result = hotel::firstOrCreate(array('nit' => $request->nit));
        try {
            $verify = hotel::where('nombre', 'like', "%{$request->nombre}%")->orWhere('nit', 'like', "%{$request->nit}%")->exists();
           if ($verify) return response()->json('exist', 200);
           

            $hotel = new hotel;

            $hotel->nombre = $request->nombre;
            $hotel->direccion = $request->direccion;
            $hotel->nit = $request->nit;
            $hotel->telefono = $request->telefono;
            $hotel->correo = $request->correo;
            $hotel->num_habitaciones = $request->num_habitaciones;
            $hotel->state = $request->estado;
            $hotel->ciudad_id = $request->ciudad;

            $hotel->save();
            return response()->json($hotel, 200);
        } catch (\Exception $e) {
            return " Error: " . $e->getMessage();
        }
    }
    
}
