<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kabupaten = File::get('database/json/indonesianRegion.json');
        $kecamatan = File::get('database/json/indonesianDistrict.json');

        DB::transaction(function() use ($kabupaten, $kecamatan){

            DB::table('kecamatan')->truncate();
            DB::table('kabupaten')->truncate();

            $id_bali = 51;
            $id_kabupaten_bali = [];

            foreach (json_decode($kabupaten, true) as $item ) {
                if($item['provinsi_id'] == $id_bali){
                    DB::table('kabupaten')->insert([
                        'id' => $item['id'],
                        'nama_kabupaten' => ucwords(strtolower($item['nama_kabupaten'])),
                        'created_at' => now()
                    ]);

                    $id_kabupaten_bali[] = $item['id'];
                }                
            }
            
            foreach (json_decode($kecamatan, true) as $item ) {
                if(in_array($item['kabupaten_id'], $id_kabupaten_bali)){
                    DB::table('kecamatan')->insert([
                        'id' => $item['id'],
                        'nama_kecamatan' => ucwords(strtolower($item['nama_kecamatan'])),
                        'kabupaten_id' => $item['kabupaten_id'],
                        'created_at' => now()
                    ]);
                }                
            }
        });

    }
}
