<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
    
        $query = Vehicule::where('user_id', auth()->id());

        if($request->filled('categorie')){
            $categorie = $request->input('categorie');
            $query->where('categorie', 'LIKE', "$categorie%");
        }

        $vehicules = $query->get();

        return view('vehicules.index', compact('vehicules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('vehicules.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicule $vehicule)
    {
        // si l'utilisateur est authentifié
        if($vehicule->user_id !== auth()->id()){
            abort(403);
        }
        return view('vehicules.show', compact('vehicule'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicule $vehicule)
    {
        //
        if($vehicule->user_id !== auth()->id()){
            abort(403);
        }
        return view('vehicules.edit', compact('vehicule'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehicule $vehicule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicule $vehicule)
    {
        //
        if($vehicule->user_id !== auth()->id()){
            abort(403);
        }

        if($vehicule->photo){
            Storage::disk('public')->delete($vehicule->photo);
        }

        $vehicule->delete();
        return redirect()->route('vehicules.index')->with('status', 'suppression avec success');
    }
}
