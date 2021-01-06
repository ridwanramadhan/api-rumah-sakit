<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;

class ProvinceController extends Controller
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

    public function get_by_id($id){
        // return response()->json(Province::all(), 200);

        $daftar_provinsi = Province::where('id', $id)->get();
        return response([
            'status' => true,
            'message' => 'Daftar Provinsi',
            'data' => $daftar_provinsi
        ], 200);
    }

    public function insert_data_province(Request $request){
        $insert_provinsi = new Province;
        $insert_provinsi->nama_provinsi = $request->nama_provinsi;
        $insert_provinsi->save();
        return response([
            'status' => true,
            'message' => 'Provinsi Disimpan',
            'data' => $insert_provinsi
        ], 200);
    }

    public function update_data_province($id, Request $request){
        $province = Province::where('id', $id)->first();
        if ($province) {
            $province->nama_provinsi = $request->nama_provinsi ? $request->nama_provinsi : $province->nama_provinsi;

            $province->save();
            return response()->json(
                [
                    'status' => true,
                    'message' => 'Data Berhasil Dirubah',
                    'update-data' => $province
                ]
            );
        }
        return response()->json(
            [
                'status' => false,
                "message" => "data with id " . $id . " not found"
            ], 404
        );
    }

    public function delete_data_province($id){
        $province = Province::where('id', $id)->first();
        if ($province) {
            $province->delete();
            return response()->json(
                [
                    'status' => true,
                    'message' => 'Data Berhasil Dihapus',
                    'deleted-data' => $province
                ]
            );
        }
        return response()->json(
            [
                'status' => false,
                "message" => "data with id " . $id . " not found"
            ], 404
        );
    }

    // public function update_data_province(Request $request, $id){
    //     //cek terlebih dahulu data yang akan di-update melalui id
    //     //apakah provinsi ada atau tidak, jika tidak return not found
    //     $check_province = Province::firstWhere('id', $id);
    //     if($check_province){
    //         // echo 'data yang anda cari tersedia';
    //         // $requestData = json_decode($request->getContent(), true);
    //         $data_barang = BarangModel::find($id);
    //         $data_barang->nama_barang = $request->input('nama_barang');
    //         $data_barang->jumlah_barang = $request->input('jumlah_barang');
    //         $data_barang->save();
    //         return response([
    //             'status' => true,
    //             'message' => 'Data Berhasil Dirubah',
    //             // 'update-data' => $data_barang
    //         ], 200);
    //     } else {
    //         // echo 'tidak ada';
    //         return response([
    //             'status' => false,
    //             'message' => 'Kode Barang Tidak ditemukan'
    //         ], 404);
    //     }
    // }

    // public function delete_data_barang($id){
    //     //cek terlebih dahulu data yang akan hapus melalui id
    //     //apakah barang ada atau tidak, jika tidak return not found
    //     $check_barang = BarangModel::firstWhere('kode_barang', $id);
    //     if($check_barang){
    //         BarangModel::destroy($id);
    //         return response([
    //             'status' => true,
    //             'message' => 'Data Dihapus',
    //         ], 200);
    //     } else {
    //         return response([
    //             'status' => false,
    //             'message' => 'Kode Barang Tidak ditemukan'
    //         ], 404);
    //     }
    // }

    // public function get(){
    //     return response()->json(
    //         [
    //             "message" => "GET method success"
    //         ]
    //     );
    // }

    // public function post(){
    //     return response()->json(
    //         [
    //             "message" => "POST method success"
    //         ]
    //     );
    // }

    // public function put($id){
    //     return response()->json(
    //         [
    //             "message" => "PUT method success " . $id
    //         ]
    //     );
    // }

    // public function delete($id){
    //     return response()->json(
    //         [
    //             "message" => "DELETE method success " . $id
    //         ]
    //     );
    // }
}
