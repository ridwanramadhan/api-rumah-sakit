<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
use App\City;

class ApiController extends Controller
{
    public function get_all_province(){
        // return response()->json(Province::all(), 200);
        $daftar_provinsi = Province::all();
        return response([
            'status' => true,
            'message' => 'Daftar Provinsi',
            'data' => $daftar_provinsi
        ], 200);
    }

    public function get_all_city(){
        // return response()->json(Province::all(), 200);
        $daftar_kota = City::all();
        return response([
            'status' => true,
            'message' => 'Daftar Kota',
            'data' => $daftar_kota
        ], 200);
    }
}
