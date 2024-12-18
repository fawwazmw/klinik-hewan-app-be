<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Perkembangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PerkembanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Perkembangan::with('hewan')->orderBy('tanggal', 'desc')->get();
        return response()->json([
            'status' => true,
            'message' => 'Data ditemukan',
            'data' => $data
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'hewan_id' => 'required|exists:hewan,id',
            'tanggal' => 'required|date',
            'berat_badan' => 'required|numeric|min:0',
            'tinggi' => 'required|numeric|min:0',
            'foto' => 'nullable|string',
            'catatan' => 'nullable|string',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal memasukkan data',
                'data' => $validator->errors()
            ]);
        }

        $perkembangan = new Perkembangan();
        $perkembangan->fill($request->all());
        $perkembangan->save();

        return response()->json([
            'status' => true,
            'message' => 'Sukses memasukkan data'
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Perkembangan::with('hewan')->find($id);
        if ($data) {
            return response()->json([
                'status' => true,
                'message' => 'Data ditemukan',
                'data' => $data
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $perkembangan = Perkembangan::find($id);
        if (empty($perkembangan)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        $rules = [
            'hewan_id' => 'required|exists:hewan,id',
            'tanggal' => 'required|date',
            'berat_badan' => 'required|numeric|min:0',
            'tinggi' => 'required|numeric|min:0',
            'foto' => 'nullable|string',
            'catatan' => 'nullable|string',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal melakukan update data',
                'data' => $validator->errors()
            ]);
        }

        $perkembangan->fill($request->all());
        $perkembangan->save();

        return response()->json([
            'status' => true,
            'message' => 'Sukses melakukan update data'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $perkembangan = Perkembangan::find($id);
        if (empty($perkembangan)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        $perkembangan->delete();

        return response()->json([
            'status' => true,
            'message' => 'Sukses melakukan hapus data'
        ]);
    }
}
