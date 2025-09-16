<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Parqueadero;


class ParqueaderoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $parqueaderos = Parqueadero::all();
    return view('parqueaderos', compact('parqueaderos'));
    }




public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required|string|max:100',
        'direccion' => 'nullable|string|max:255',
        'descripcion' => 'nullable|string',
        'espacios_disponibles' => 'required|integer|min:0',
    ]);

    Parqueadero::create($request->all());

    return redirect()->route('parqueaderos.index')->with('success', 'Parqueadero registrado exitosamente.');
}

    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

