<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Dokter::orderBy('nama', 'asc')->get();
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
        $dataDokter = new Dokter;

        $rules = [
            'nama' => 'required',
            'spesialis' => 'required',
            'tahun' => 'required',
            'kepuasan' => 'required',
            'harga' => 'required',
            'NIP' => 'required|unique:dokter,NIP'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal memasukkan data',
                'data' => $validator->errors()
            ]);
        }

        $dataDokter->nama = $request->nama;
        $dataDokter->spesialis = $request->spesialis;
        $dataDokter->tahun = $request->tahun;
        $dataDokter->kepuasan = $request->kepuasan;
        $dataDokter->harga = $request->harga;
        $dataDokter->NIP = $request->NIP;

        $dataDokter->save();

        return response()->json([
            'status' => true,
            'message' => 'Sukses memasukkan data'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Dokter::find($id);

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
        $dataDokter = Dokter::find($id);

        if (empty($dataDokter)) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal melakukan update data'
            ], 404);
        }

        $rules = [
            'nama' => 'required',
            'spesialis' => 'required',
            'tahun' => 'required',
            'kepuasan' => 'required',
            'harga' => 'required',
            'NIP' => 'required|unique:dokter,NIP,' . $id
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal memasukkan data',
                'data' => $validator->errors()
            ]);
        }

        $dataDokter->nama = $request->nama;
        $dataDokter->spesialis = $request->spesialis;
        $dataDokter->tahun = $request->tahun;
        $dataDokter->kepuasan = $request->kepuasan;
        $dataDokter->harga = $request->harga;
        $dataDokter->NIP = $request->NIP;

        $dataDokter->save();

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
        $dataDokter = Dokter::find($id);

        if (empty($dataDokter)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        $dataDokter->delete();

        return response()->json([
            'status' => true,
            'message' => 'Sukses melakukan hapus data'
        ]);
    }

}
