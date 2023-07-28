<?php

namespace Database\Seeders;

use App\Models\Rfq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RfqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rfq::factory(25)->create();
    }
}
