<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
use App\City;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data_provinsi = Province::all();
        $jumlah_provinsi = $data_provinsi->count();

        $data_kota = City::where('jenis', 'kota')->get();
        $jumlah_kota = $data_kota->count();
        
        $data_kabupaten = City::where('jenis', 'kabupaten')->get();
        $jumlah_kabupaten = $data_kabupaten->count();
        // dd($jumlah_provinsi, $jumlah_kota, $jumlah_kabupaten);
        return view('dashboard.index', compact('jumlah_provinsi', 'jumlah_kota', 'jumlah_kabupaten'));
    }
}
