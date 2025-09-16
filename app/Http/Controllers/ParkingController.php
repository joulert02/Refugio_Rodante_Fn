<?php

namespace App\Http\Controllers;

use App\Models\Parking; // ✅ Importa el modelo Parking
use Illuminate\Http\Request;

class ParkingController extends Controller
{
    // Método para mostrar el mapa con todos los parqueaderos
    public function showMap()
    {

        $parkings = Parking::select('name', 'latitude', 'longitude', 'available_spaces', 'price_per_hour')->get();
        
        $parkings = Parking::all(); // obtiene todos los parqueaderos
        return view('mapa', compact('parkings')); // pasa los datos a la vista
    }
}
