<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kesehatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KesehatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kesehatan::with('hewan')->orderBy('tanggal', 'desc')->get();
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
            'gejala' => 'required|string|max:255',
            'diagnosis' => 'required|string|max:255',
            'tindakan' => 'required|string|max:255',
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

        $kesehatan = new Kesehatan();
        $kesehatan->fill($request->all());
        $kesehatan->save();

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
        $data = Kesehatan::with('hewan')->find($id);
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
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kesehatan = Kesehatan::find($id);
        if (empty($kesehatan)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        $rules = [
            'hewan_id' => 'required|exists:hewan,id',
            'tanggal' => 'required|date',
            'gejala' => 'required|string|max:255',
            'diagnosis' => 'required|string|max:255',
            'tindakan' => 'required|string|max:255',
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

        $kesehatan->fill($request->all());
        $kesehatan->save();

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
        $kesehatan = Kesehatan::find($id);
        if (empty($kesehatan)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        $kesehatan->delete();

        return response()->json([
            'status' => true,
            'message' => 'Sukses melakukan hapus data'
        ]);
    }
}
