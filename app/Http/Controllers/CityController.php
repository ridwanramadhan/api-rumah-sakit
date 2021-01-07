<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\City;

class CityController extends Controller
{
    public function get_all_city(){
        // return response()->json(Province::all(), 200);
        $daftar_kota = DB::table('city')
            ->join('province', 'city.id_provinsi', '=', 'province.id')
            ->select('city.*', 'province.nama_provinsi')
            ->get();
        // $daftar_kota = City::all();
        return view('kota.index', compact('daftar_kota'));
        // return response([
        //     'status' => true,
        //     'message' => 'Daftar Kota',
        //     'data' => $daftar_kota
        // ], 200);
    }
}
