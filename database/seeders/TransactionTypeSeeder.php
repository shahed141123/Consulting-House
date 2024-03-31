<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransactionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transaction_types')->insert([

            [
                'profile_type_id'     => '1',
                'category_id'         => null,
                'name'                => 'Full sale of business',
                'slug'                => Str::slug('Full sale of business'),
                'status'              => 'active',
            ],


            [
                'profile_type_id'     => '1',
                'category_id'         => null,
                'name'                => 'Partial stake sale of business/investment',
                'slug'                => Str::slug('Partial stake sale of business/investment'),
                'status'              => 'active',

            ],

            [
                'profile_type_id'     => '1',
                'category_id'         => null,
                'name'                => 'Loan for business',
                'slug'                => Str::slug('Loan for business'),
                'status'              => 'active',

            ],

            [
                'profile_type_id'     => '1',
                'category_id'         => null,
                'name'                => 'Selling or Leasing out Business Assets',
                'slug'                => Str::slug('Selling or Leasing out Business Assets'),
                'status'              => 'active',

            ],
            [
                'profile_type_id'     => '2',
                'category_id'         => null,
                'name'                => 'Acquiring / Buying a Business',
                'slug'                => Str::slug('Acquiring / Buying a Business'),
                'status'              => 'active',

            ],
            [
                'profile_type_id'     => '2',
                'category_id'         => null,
                'name'                => 'Investing in a Business',
                'slug'                => Str::slug('Investing in a Business'),
                'status'              => 'active',

            ],
            [
                'profile_type_id'     => '2',
                'category_id'         => null,
                'name'                => 'Lending to a Business',
                'slug'                => Str::slug('Lending to a Business'),
                'status'              => 'active',

            ],
            [
                'profile_type_id'     => '2',
                'category_id'         => null,
                'name'                => 'Buying Property / Plant / Machinery',
                'slug'                => Str::slug('Buying Property / Plant / Machinery'),
                'status'              => 'active',

            ],
            [
                'profile_type_id'     => '2',
                'category_id'         => null,
                'name'                => 'Taking up a Franchise / Distributorship / Sales Agency',
                'slug'                => Str::slug('Taking up a Franchise / Distributorship / Sales Agency'),
                'status'              => 'active',

            ],
            [
                'profile_type_id'     => '3',
                'category_id'         => null,
                'name'                => 'Franchise Opportunity',
                'slug'                => Str::slug('Franchise Opportunity'),
                'status'              => 'active',

            ],
            [
                'profile_type_id'     => '3',
                'category_id'         => null,
                'name'                => 'Dealership Opportunity',
                'slug'                => Str::slug('Dealership Opportunity'),
                'status'              => 'active',

            ],
            [
                'profile_type_id'     => '3',
                'category_id'         => null,
                'name'                => 'Reseller Opportunity',
                'slug'                => Str::slug('Reseller Opportunity'),
                'status'              => 'active',

            ],
            [
                'profile_type_id'     => '3',
                'category_id'         => null,
                'name'                => 'Distributor Opportunity',
                'slug'                => Str::slug('Distributor Opportunity'),
                'status'              => 'active',

            ],
            [
                'profile_type_id'     => '3',
                'category_id'         => null,
                'name'                => 'Sales Partner Opportunity',
                'slug'                => Str::slug('Sales Partner Opportunity'),
                'status'              => 'active',

            ],
        ]);
    }
}
