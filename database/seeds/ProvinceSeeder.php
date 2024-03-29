<?php

use Illuminate\Database\Seeder;
use Illuminate\Http\Request; //new Laravel 7 HTTP Client
use App\Province;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Province::truncate();//kosongkan table

        $key = '1038a79bb33afe1a1ba54d070f900a6e';
        $province_url = 'https://api.rajaongkir.com/starter/province';

        //logic untuk get province and city
        $getProvinces = $this->getData($key,$province_url);
        $provinces = $getProvinces['rajaongkir']['results'];

        foreach($provinces as $province){
            $data[] = [
                'id' => $province['province_id'],
                'nama_provinsi' => $province['province'],
                'created_at' => date('Y-m-d H:i:s')
            ];
        }

        Province::insert($data);
    }

    //function untuk get data province and city
    private function getData($key,$url){
        return Http::withHeaders([
            'key' => $key
        ])->get($url);
    }
}
