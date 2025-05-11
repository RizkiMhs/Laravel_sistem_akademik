<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengumuman;
use App\Http\Resources\PengumumanResource;

class PengumumanController extends Controller
{
    //
    public function index()
    {
        // Logic to fetch and return all pengumuman

        return PengumumanResource::collection(Pengumuman::all());


    }
    public function show($id)
    {
        // Logic to fetch and return a specific pengumuman by ID
        $pengumuman = Pengumuman::find($id);
        if (!$pengumuman) {
            return response()->json(['message' => 'Pengumuman not found'], 404);
        }
        return new PengumumanResource($pengumuman);
    }
    public function store(Request $request)
    {
        // Logic to create a new pengumuman
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'isi' => 'required|string',
        ]);
        $pengumuman = Pengumuman::create($validatedData);
        return response()->json(new PengumumanResource($pengumuman), 201);
    }
    public function update(Request $request, $id)
    {
        // Logic to update an existing pengumuman by ID
        $pengumuman = Pengumuman::find($id);
        if (!$pengumuman) {
            return response()->json(['message' => 'Pengumuman not found'], 404);
        }
        $validatedData = $request->validate([
            'judul' => 'sometimes|required|string|max:255',
            'kategori' => 'sometimes|required|string|max:255',
            'isi' => 'sometimes|required|string',
        ]);
        $pengumuman->update($validatedData);
        return response()->json(new PengumumanResource($pengumuman), 200);
    }
    public function destroy($id)
    {
        // Logic to delete a pengumuman by ID
        $pengumuman = Pengumuman::find($id);
        if (!$pengumuman) {
            return response()->json(['message' => 'Pengumuman not found'], 404);
        }
        $pengumuman->delete();
        return response()->json(['message' => 'Pengumuman deleted successfully'], 200); 
        
    }
}
