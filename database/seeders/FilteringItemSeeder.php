<?php

namespace Database\Seeders;

use App\Models\FilteringItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilteringItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FilteringItem::factory(25)->create();
    }
}
