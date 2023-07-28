<?php

namespace Database\Seeders;

use App\Models\ClientTypeCategory;
use App\Models\ProfileType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ClientTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('client_types')->insert([

            [
                'profile_type_id'     => ProfileType::inRandomOrder()->first()->id,
                'category_id'         => null,
                'name'                => 'Business Owner / Director',
                'slug'                => Str::slug('Business Owner / Director'),
                'status'              => 'active',
            ],


            [
                'profile_type_id'     => ProfileType::inRandomOrder()->first()->id,
                'category_id'         => null,
                'name'                => 'Management Member',
                'slug'                => Str::slug('Management Member'),
                'status'              => 'active',

            ],

            [
                'profile_type_id'     => ProfileType::inRandomOrder()->first()->id,
                'category_id'         => null,
                'name'                => 'Advisor / Business Broker',
                'slug'                => Str::slug('Advisor / Business Broker'),
                'status'              => 'active',

            ],

            [
                'profile_type_id'     => ProfileType::inRandomOrder()->first()->id,
                'category_id'         => null,
                'name'                => 'Individual Investor / Buyer',
                'slug'                => Str::slug('Individual Investor / Buyer'),
                'status'              => 'active',

            ],
            [
                'profile_type_id'     => ProfileType::inRandomOrder()->first()->id,
                'category_id'         => ClientTypeCategory::inRandomOrder()->first()->id,
                'name'                => 'Accounting Firm',
                'slug'                => Str::slug('Accounting Firm'),
                'status'              => 'active',

            ],
            [
                'profile_type_id'     => ProfileType::inRandomOrder()->first()->id,
                'category_id'         => ClientTypeCategory::inRandomOrder()->first()->id,
                'name'                => 'Venture Capital Firm',
                'slug'                => Str::slug('Venture Capital Firm'),
                'status'              => 'active',

            ],
        ]);
    }
}
