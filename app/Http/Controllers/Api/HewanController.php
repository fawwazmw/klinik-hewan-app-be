<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Hewan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HewanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Hewan::orderBy('pemilik','asc')->get();
        return response()->json([
            'status'=>true,
            'message'=>'Data ditemukan',
            'data'=>$data
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataHewan = new Hewan;

        $rules =[
            'nama_hewan'=>'required',
            'jenis'=>'required',
            'pemilik'=>'required'
        ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return response()->json([
                'status'=>false,
                'message'=>'Gagal memasukkan data',
                'data'=>$validator->errors()
            ]);
        }

        $dataHewan->nama_hewan = $request->nama_hewan;
        $dataHewan->jenis = $request->jenis;
        $dataHewan->pemilik = $request->pemilik;

        $post = $dataHewan->save();

        return response()->json([
            'status'=>true,
            'message'=>'Sukses memasukkan data'
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $data = Hewan::find($id);
       if($data){
        return response()->json([
            'status'=>true,
            'message'=>'Data ditemukan',
            'data'=>$data
        ],200);
       }else{
        return response()->json([
            'status'=>false,
            'message'=>'Data tidak ditemukan',
        ]);
       }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $dataHewan = Hewan::find($id);
        if(empty($dataHewan)){
            return response()->json([
                'status'=>false,
                'message'=>'Gagal melakukan update data'
            ],404);
        }
        $rules =[
            'nama_hewan'=>'required',
            'jenis'=>'required',
            'pemilik'=>'required'
        ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return response()->json([
                'status'=>false,
                'message'=>'Gagal memasukkan data',
                'data'=>$validator->errors()
            ]);
        }

        $dataHewan->nama_hewan = $request->nama_hewan;
        $dataHewan->jenis = $request->jenis;
        $dataHewan->pemilik = $request->pemilik;

        $post = $dataHewan->save();

        return response()->json([
            'status'=>true,
            'message'=>'Sukses melakukan update data'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataHewan = Hewan::find($id);
        if(empty($dataHewan)){
            return response()->json([
                'status'=>false,
                'message'=>'Data tidak ditemukan'
            ],404);
        }

        $post = $dataHewan->delete();

        return response()->json([
            'status'=>true,
            'message'=>'Sukses melakukan hapus data'
        ]);
    }
}
