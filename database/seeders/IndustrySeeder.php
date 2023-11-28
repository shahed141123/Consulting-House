<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('industries')->insert([
            [
                'sector_id'     => '1',
                'name'   => 'Building Maintenance',
                'slug'   => Str::slug('Building Maintenance'),
                'status' => 'active',
            ],
            [
                'sector_id'     => '1',
                'name'   => 'Real Estate Construction',
                'slug'   => Str::slug('Real Estate Construction'),
                'status' => 'active',
            ],
            [
                'sector_id'     => '2',
                'name'   => 'Employment Services',
                'slug'   => Str::slug('Employment Services'),
                'status' => 'active',
            ],
            [
                'sector_id'     => '2',
                'name'   => 'IT Services',
                'slug'   => Str::slug('IT Services'),
                'status' => 'active',
            ],
            [
                'sector_id'     => '3',
                'name'   => 'Education Support',
                'slug'   => Str::slug('Education Support'),
                'status' => 'active',
            ],
            [
                'sector_id'     => '3',
                'name'   => 'Training Institutes',
                'slug'   => Str::slug('Training Institutes'),
                'status' => 'active',
            ],
            [
                'sector_id'     => '4',
                'name'   => 'Oil and Gas Industry',
                'slug'   => Str::slug('Oil and Gas Industry'),
                'status' => 'active',
            ],
            [
                'sector_id'     => '4',
                'name'   => 'Coal Industry',
                'slug'   => Str::slug('Coal Industry'),
                'status' => 'active',
            ],
            [
                'sector_id'     => '5',
                'name'   => 'Banks',
                'slug'   => Str::slug('Banks'),
                'status' => 'active',
            ],
            [
                'sector_id'     => '5',
                'name'   => 'Consumer Lending',
                'slug'   => Str::slug('Consumer Lending'),
                'status' => 'active',
            ],
            [
                'sector_id'     => '6',
                'name'   => 'Agriculture',
                'slug'   => Str::slug('Agriculture'),
                'status' => 'active',
            ],
            [
                'sector_id'     => '6',
                'name'   => 'Restaurant and Bars',
                'slug'   => Str::slug('Restaurant and Bars'),
                'status' => 'active',
            ],
            [
                'sector_id'     => '7',
                'name'   => 'Pharmaceuticals',
                'slug'   => Str::slug('Pharmaceuticals'),
                'status' => 'active',
            ],
            [
                'sector_id'     => '7',
                'name'   => 'Healthcare Services',
                'slug'   => Str::slug('Healthcare Services'),
                'status' => 'active',
            ],
            [
                'sector_id'     => '8',
                'name'   => 'Automobile Manufacturing',
                'slug'   => Str::slug('Automobile Manufacturing'),
                'status' => 'active',
            ],
            [
                'sector_id'     => '8',
                'name'   => 'Electrical Equipment',
                'slug'   => Str::slug('Electrical Equipment'),
                'status' => 'active',
            ],
            [
                'sector_id'     => '9',
                'name'   => 'Airport Services',
                'slug'   => Str::slug('Airport Services'),
                'status' => 'active',
            ],
            [
                'sector_id'     => '9',
                'name'   => 'Transportation',
                'slug'   => Str::slug('Transportation'),
                'status' => 'active',
            ],
            [
                'sector_id'     => '10',
                'name'   => 'Advertising and Marketing',
                'slug'   => Str::slug('Advertising and Marketing'),
                'status' => 'active',
            ],
            [
                'sector_id'     => '10',
                'name'   => 'Publishing',
                'slug'   => Str::slug('Publishing'),
                'status' => 'active',
            ],
            [
                'sector_id'     => '11',
                'name'   => 'Apparel Stores',
                'slug'   => Str::slug('Apparel Stores'),
                'status' => 'active',
            ],
            [
                'sector_id'     => '11',
                'name'   => 'Computer Shops',
                'slug'   => Str::slug('Computer Shops'),
                'status' => 'active',
            ],
            [
                'sector_id'     => '12',
                'name'   => 'Networking Equipment',
                'slug'   => Str::slug('Networking Equipment'),
                'status' => 'active',
            ],
            [
                'sector_id'     => '12',
                'name'   => 'Semiconductor Equipment',
                'slug'   => Str::slug('Semiconductor Equipment'),
                'status' => 'active',
            ],
            [
                'sector_id'     => '13',
                'name'   => 'Footwear',
                'slug'   => Str::slug('Footwear'),
                'status' => 'active',
            ],
            [
                'sector_id'     => '13',
                'name'   => 'Textile',
                'slug'   => Str::slug('Textile'),
                'status' => 'active',
            ],
            [
                'sector_id'     => '14',
                'name'   => 'Hotels and Resorts',
                'slug'   => Str::slug('Hotels and Resorts'),
                'status' => 'active',
            ],
            [
                'sector_id'     => '14',
                'name'   => 'Leisure and Recreation',
                'slug'   => Str::slug('Leisure and Recreation'),
                'status' => 'active',
            ],

        ]);
    }
}
