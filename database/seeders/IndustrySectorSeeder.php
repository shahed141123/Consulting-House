<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IndustrySectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('industry_sectors')->insert([
            [
                'name'   => 'Building, Construction and Maintenance',
                'slug'   => Str::slug('Building, Construction and Maintenance'),
                'status' => 'active',
            ],
            [
                'name'   => 'Business Services',
                'slug'   => Str::slug('Business Services'),
                'status' => 'active',
            ],
            [
                'name'   => 'Education',
                'slug'   => Str::slug('Education'),
                'status' => 'active',
            ],
            [
                'name'   => 'Energy',
                'slug'   => Str::slug('Energy'),
                'status' => 'active',
            ],
            [
                'name'   => 'Finance',
                'slug'   => Str::slug('Finance'),
                'status' => 'active',
            ],
            [
                'name'   => 'Food & Beverage',
                'slug'   => Str::slug('Food & Beverage'),
                'status' => 'active',
            ],
            [
                'name'   => 'Healthcare',
                'slug'   => Str::slug('Healthcare'),
                'status' => 'active',
            ],
            [
                'name'   => 'Industrial',
                'slug'   => Str::slug('Industrial'),
                'status' => 'active',
            ],
            [
                'name'   => 'Logistics',
                'slug'   => Str::slug('Logistics'),
                'status' => 'active',
            ],
            [
                'name'   => 'Media',
                'slug'   => Str::slug('Media'),
                'status' => 'active',
            ],
            [
                'name'   => 'Retail Shops',
                'slug'   => Str::slug('Retail Shops'),
                'status' => 'active',
            ],
            [
                'name'   => 'Technology',
                'slug'   => Str::slug('Technology'),
                'status' => 'active',
            ],
            [
                'name'   => 'Textiles',
                'slug'   => Str::slug('Textiles'),
                'status' => 'active',
            ],
            [
                'name'   => 'Travel & Leisure',
                'slug'   => Str::slug('Travel & Leisure'),
                'status' => 'active',
            ],

        ]);
    }
}
