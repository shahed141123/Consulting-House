<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EntityTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('entity_types')->insert([


            [
                'profile_type_id'     => '1',
                'name'                => 'Sole Proprietorship/Sole Trader',
                'slug'                => Str::slug('Sole Proprietorship/Sole Trader'),
                'status'              => 'active',

            ],
            [
                'profile_type_id'     => '1',
                'name'                => 'General Partnership',
                'slug'                => Str::slug('General Partnership'),
                'status'              => 'active',

            ],
            [
                'profile_type_id'     => '1',
                'name'                => 'Limited Liability Partnership (LLP)',
                'slug'                => Str::slug('Limited Liability Partnership (LLP)'),
                'status'              => 'active',

            ],
            [
                'profile_type_id'     => '1',
                'name'                => 'Limited Liability Company (LLC)',
                'slug'                => Str::slug('Limited Liability Company (LLC)'),
                'status'              => 'active',

            ],
            [
                'profile_type_id'     => '1',
                'name'                => 'Private Limited Company',
                'slug'                => Str::slug('Private Limited Company'),
                'status'              => 'active',

            ],
            [
                'profile_type_id'     => '1',
                'name'                => 'Public Limited Company',
                'slug'                => Str::slug('Public Limited Company'),
                'status'              => 'active',

            ],
            [
                'profile_type_id'     => '1',
                'name'                => 'S Corporation',
                'slug'                => Str::slug('S Corporation'),
                'status'              => 'active',

            ],
            [
                'profile_type_id'     => '1',
                'name'                => 'C Corporation',
                'slug'                => Str::slug('C Corporation'),
                'status'              => 'active',

            ],
            [
                'profile_type_id'     => '1',
                'name'                => 'Other',
                'slug'                => Str::slug('Other'),
                'status'              => 'active',

            ],
        ]);
    }
}
