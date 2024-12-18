<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $obat = Obat::all();
        return response()->json([
            'status' => true,
            'message' => 'List of all obat',
            'data' => $obat
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_obat' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric|min:0',
        ]);

        $obat = Obat::create($validated);

        return response()->json([
            'status' => true,
            'message' => 'Obat created successfully',
            'data' => $obat
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Obat $obat)
    {
        return response()->json([
            'status' => true,
            'message' => 'Obat details',
            'data' => $obat
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Obat $obat)
    {
        $validated = $request->validate([
            'nama_obat' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric|min:0',
        ]);

        $obat->update($validated);

        return response()->json([
            'status' => true,
            'message' => 'Obat updated successfully',
            'data' => $obat
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Obat $obat)
    {
        $obat->delete();

        return response()->json([
            'status' => true,
            'message' => 'Obat deleted successfully',
        ]);
    }
}
