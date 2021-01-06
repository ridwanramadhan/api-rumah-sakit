<?php

use Illuminate\Database\Seeder;
use Illuminate\Http\Request; //new Laravel 7 HTTP Client
use App\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::truncate();//kosongkan table

        $key = '1038a79bb33afe1a1ba54d070f900a6e';
        $city_url = 'https://api.rajaongkir.com/starter/city';

        //logic untuk get province and city
        $getCities = $this->getData($key,$city_url);
        $cities = $getCities['rajaongkir']['results'];

        foreach($cities as $city){
            $data[] = [
                'id' => $city['city_id'],
                'nama_kota' => $city['city_name'],
                'id_provinsi' => $city['province_id'],
                'jenis' => $city['type'],
                'kode_pos' => $city['postal_code'],
                'created_at' => date('Y-m-d H:i:s')
            ];
        }

        City::insert($data);
    }

    //function untuk get data province and city
    private function getData($key,$url){
        return Http::withHeaders([
            'key' => $key
        ])->get($url);
    }
}
