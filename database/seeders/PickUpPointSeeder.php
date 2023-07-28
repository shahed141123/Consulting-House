<?php

namespace Database\Seeders;

use App\Models\PickUpPoint;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PickUpPointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PickUpPoint::factory(25)->create();
    }
}
