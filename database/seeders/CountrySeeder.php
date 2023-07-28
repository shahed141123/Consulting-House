<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/data/countries.json');
        $countries = json_decode($json, true);

        $data = [];

        foreach ($countries as $country) {
            $data[] = [
                'name' => $country['name'],
                'short_name' => $country['short_name'],
                'flag_img' => $country['flag_img'],
                'country_code' => $country['country_code']
            ];
        }

        DB::table('countries')->insert($data);
    }
}
