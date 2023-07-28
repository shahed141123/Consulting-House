<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClientTypeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('client_type_categories')->insert([

            [
                'name'        => 'Lender',
                'slug'        => Str::slug('Lender'),
                'status'      => 'active',
            ],


            [
                'name'        => 'Financial Advisor',
                'slug'        => Str::slug('Financial Advisor'),
                'status'      => 'active',

            ],

            [
                'name'        => 'Fund',
                'slug'        => Str::slug('Fund'),
                'status'      => 'active',

            ],

            [
                'name'        => 'Consultant',
                'slug'        => Str::slug('Consultant'),
                'status'      => 'active',

            ],
        ]);
    }
}
