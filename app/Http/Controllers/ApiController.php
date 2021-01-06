<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;

class ApiController extends Controller
{
    public function get_all_province(){
        // return response()->json(Province::all(), 200);
        $daftar_provinsi = Province::select('id', 'nama_provinsi')->get();
        return response([
            'status' => true,
            'message' => 'Daftar Provinsi',
            'data' => $daftar_provinsi
        ], 200);
    }

    public function insert_data_province(Request $request){
        $insert_provinsi = new Province;
        $insert_provinsi->nama_provinsi = $request->namaProvinsi;
        $insert_provinsi->save();
        return response([
            'status' => true,
            'message' => 'Provinsi Disimpan',
            'data' => $insert_provinsi
        ], 200);
    }
}
