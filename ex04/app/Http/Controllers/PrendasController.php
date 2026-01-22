<?php

namespace App\Http\Controllers;

use App\Models\Prendas;
use Illuminate\Http\Request;

class PrendasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $prendas = Prendas::all();
        return view('prendas.showAllPrendas', compact('prendas'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prendas = Prendas::all();
        return view('prendas.showAllPrendas',compact('prendas'));
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

        $prendas = Prendas::create($request->only(['nombre', 'descripcion', 'precio']));

        return redirect()->route('prendas.showAllPrendas');
    }
    

    public function showAllPrendas($id) 
    {
        $prendas = Prendas::all();
        return view('prendas.showAllPrendas', compact('prendas'));
    }

   public function showOnePrendas($id)
    {
        $prenda = Prendas::findOrFail($id);
        return view('prendas.showOnePrendas', compact('prenda'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prendas $prendas)
    {
         $prenda = Prendas::findOrFail($id);
        return view('prendas.edit', compact('prenda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prendas $prendas)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric'
        ],
        [
            'nombre.required' => 'El nombre es obligatorio'
        ]);

        $prenda = Prendas::findOrFail($id);

        $prenda->update($request->only(['nombre']));

        return redirect()->route('prendas.showOnePrendas', $id);
    }

    public function confirmDelete(Prendas $prendas)
    {
        return view('prendas.confirmDelete', compact('prendas'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prendas $prendas)
    {
        $prendas->delete();

        return redirect()
            ->route('prendas.showAllPrendas')
            ->with('success', 'Prenda eliminada correctamente');
    }

}
