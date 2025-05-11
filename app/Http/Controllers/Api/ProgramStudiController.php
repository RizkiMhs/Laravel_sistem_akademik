<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProgramStudi;
use App\Http\Resources\ProgramStudiResource;

class ProgramStudiController extends Controller
{
    //

    public function index()
    {
        return ProgramStudiResource::collection(ProgramStudi::all());
    }
    
    public function show($id)
    {
        $programStudi = ProgramStudi::find($id);
        if (!$programStudi) {
            return response()->json(['message' => 'Program Studi not found'], 404);
        }
        return new ProgramStudiResource($programStudi);
    }
}   
