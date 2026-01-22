<?php

namespace App\Http\Controllers;

use App\Models\Felhasznalo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class FelhasznaloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $felhasznalok = Felhasznalo::all();
        return response()->json($felhasznalok);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
            'nev' => 'required|string|max:255',
            'email' => 'required|email|unique:felhasznalok,email',
            'jelszo' => 'required|string|min:6',
            'telefonszam' => 'nullable|string|max:20',
            'nyelv_id' => 'nullable|exists:nyelvs,id',
            'szekhely' => 'nullable|string|max:255',
            'aktiv' => 'boolean',
        ]);

        $felhasznalo = Felhasznalo::create($validated);

        return response()->json($felhasznalo, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $felhasznalo = Felhasznalo::with('nyelv')->findOrFail($id);
        return response()->json($felhasznalo);
    }

    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $felhasznalo = Felhasznalo::findOrFail($id);

        $validated = $request->validate([
            'nev' => 'sometimes|string|max:255',
            'email' => 'sometimes|email|unique:felhasznalok,email,' . $id . ',felhasznalo_id',
            'jelszo' => 'sometimes|string|min:6',
            'telefonszam' => 'nullable|string|max:20',
            'nyelv_id' => 'nullable|exists:nyelvs,id',
            'szekhely' => 'nullable|string|max:255',
            'aktiv' => 'boolean',
        ]);

        
        if (isset($validated['jelszo'])) {
            $validated['jelszo'] = Hash::make($validated['jelszo']);
        }

        $felhasznalo->update($validated);

        return response()->json($felhasznalo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $felhasznalo = Felhasznalo::findOrFail($id);
        $felhasznalo->delete();

        return response()->json(['message' => 'Felhasználó törölve.']);
    }
}
