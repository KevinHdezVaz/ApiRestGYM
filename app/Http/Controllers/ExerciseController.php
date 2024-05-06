<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exercise;  // Asegúrate de que la ruta coincida con la ubicación de tu modelo.

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $exercises = Exercise::all();
        return response()->json($exercises);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
        ]);
    
        $exercise = Exercise::create($validated);
        return response()->json($exercise, 201);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
