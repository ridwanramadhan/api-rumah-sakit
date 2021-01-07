<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        // $daftar_kota = City::all();
        $daftar_kota = City::join('province', 'city.id_provinsi', '=', 'province.id')->get(['city.id', 'province.nama_provinsi', 'city.nama_kota', 'city.jenis', 'city.kode_pos']);
        // $daftar_kota = DB::table('city')
        //     ->join('province', 'city.id_provinsi', '=', 'province.id')
        //     ->select('city.*', 'province.nama_provinsi')
        //     ->get();
        return response([
            'status' => true,
            'message' => 'Daftar Kota',
            'data' => $daftar_kota
        ], 200);
    }
}
