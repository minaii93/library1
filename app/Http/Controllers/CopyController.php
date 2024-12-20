<?php

namespace App\Http\Controllers;

use App\Models\Copy;
use Illuminate\Http\Request;

class CopyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Copy::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $record = new Copy();
        // $record ->fill($request-> all());
        // $record -> save();
    try {
        $record = new Copy();
        $record->fill($request->all());
        $record->save();
        return response()->json($record, 201); // Sikeres létrehozás
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 400);
    }
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Copy::find($id); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $record = Copy::find($id); //első lépés megkeresni 
        $record ->fill($request-> all());
        $record -> save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Copy::find($id)->delete();
    }
}
