<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $informasi = Informasi::all();
        return response()->json([
            'status' => true,
            'message' => 'List of all informasi',
            'data' => $informasi
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
            'title' => 'required|string|max:255',
            'owner' => 'required|string|max:255',
        ]);

        $informasi = Informasi::create($validated);

        return response()->json([
            'status' => true,
            'message' => 'Informasi created successfully',
            'data' => $informasi
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Informasi $informasi)
    {
        return response()->json([
            'status' => true,
            'message' => 'Informasi details',
            'data' => $informasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Informasi $informasi)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'owner' => 'required|string|max:255',
        ]);

        $informasi->update($validated);

        return response()->json([
            'status' => true,
            'message' => 'Informasi updated successfully',
            'data' => $informasi
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Informasi $informasi)
    {
        $informasi->delete();

        return response()->json([
            'status' => true,
            'message' => 'Informasi deleted successfully',
        ]);
    }
}
