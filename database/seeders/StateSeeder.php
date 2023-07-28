<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/data/states.json');
        $data = json_decode($json, true);

        $states = [];

        foreach ($data as $state) {
            $states[] = [
                'country_id' => $state['country_id'],
                'name' => $state['name']
            ];
        }

        DB::table('states')->insert($states);
    }
}
