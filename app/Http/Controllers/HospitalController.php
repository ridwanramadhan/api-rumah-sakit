<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hospital;

class HospitalController extends Controller
{
    public function get_all_hospital(){
        $daftar_rumah_sakit = Hospital::all();
        return view('rumah-sakit.index', compact('daftar_rumah_sakit'));
    }
}
