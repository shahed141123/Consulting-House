<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfileTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profile_types')->insert([

            [
                'name'        => 'Business Profile',
                'slug'        => Str::slug('Business Profile'),
                'image'       => fake()->imageUrl,
                'description' => fake()->paragraph,
                'status'      => 'active',
            ],


            [
                'name'        => 'Investor Profile',
                'slug'        => Str::slug('Investor Profile'),
                'image'       => fake()->imageUrl,
                'description' => fake()->paragraph,
                'status'      => 'active',

            ],

            [
                'name'        => 'Franchise/Distributor Profile',
                'slug'        => Str::slug('Franchise/Distributor Profile'),
                'image'       => fake()->imageUrl,
                'description' => fake()->paragraph,
                'status'      => 'active',

            ],

            [
                'name'        => 'Consultant Profile',
                'slug'        => Str::slug('Consultant Profile'),
                'image'       => fake()->imageUrl,
                'description' => fake()->paragraph,
                'status'      => 'active',

            ],
        ]);
    }
}
