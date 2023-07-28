<?php

namespace Database\Seeders;

use App\Models\PreOrder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PreOrderSeeder extends Seeder
{
    protected $model = PreOrder::class;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PreOrder::factory(25)->create();
    }
}
