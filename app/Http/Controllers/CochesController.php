<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\coche;

class CochesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Vamos a listar los coches con filtro
        $query = coche::query();
        $request->has('marca');
        if($request->has('marca')) {
            $query->where('marca', 'like', '%'.$request->get('nombre').'%');
            
        }
        $coches = $query->get();
        return view('coches', ['coches' => $coches]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Vamos a crear un coche
        return view('crearCoche');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Vamos a guardar el coche
        $request->validate([
            'marca' => 'string|required',
            'color' => 'string|required'
        ]);
        coche::create($request->all());
        return redirect()->route('index')->with('success', 'Coche creado correctamente');
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
        $coche = coche::find($id);
        return view('editarCoche', compact('coche'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $coche = coche::findOrFail($id);
        $request->validate([
            'marca' => 'string|required',
            'color' => 'string|required'
        ]);
        $coche->update($request->all());
        return redirect()->route('index')->with('success', 'Coche actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
