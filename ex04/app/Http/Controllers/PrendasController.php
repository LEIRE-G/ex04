<?php

namespace App\Http\Controllers;

use App\Models\Prenda;
use Illuminate\Http\Request;

class PrendasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $prendas = Prenda::all();
        return view('prendas.showAllPrendas', compact('prendas'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prendas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric'
        ],
        [
            'nombre.required' => 'El nombre es obligatorio',
            'descripcion.required' => 'La descripción es obligatoria',
            'precio.required' => 'El precio es obligatorio',
            'precio.numeric' => 'El precio debe ser un número'
        ]);

        $prendas = Prenda::create($request->only(['nombre', 'descripcion', 'precio']));

        return redirect()->route('prendas.index');
    }
    

    public function show($id)
    {
        $prenda = Prenda::findOrFail($id);
        return view('prendas.showOnePrendas', compact('prenda'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         $prenda = Prenda::findOrFail($id);
        return view('prendas.edit', compact('prenda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric'
        ],
        [
            'nombre.required' => 'El nombre es obligatorio'
        ]);

        $prenda = Prenda::findOrFail($id);

        $prenda->update($request->only(['nombre', 'descripcion', 'precio']));

        return redirect()->route('prendas.show', $id);
    }

    public function confirmDelete($id)
    {
        $prenda = Prenda::findOrFail($id);
        return view('prendas.confirmDelete', compact('prenda'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prenda $prenda)
    {
        $prenda->delete();

        return redirect()
            ->route('prendas.index')
            ->with('success', 'Prenda eliminada correctamente');
    }

}
