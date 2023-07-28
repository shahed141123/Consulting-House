<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\FrontendMenu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FrontendMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('frontend_menus')->insert([

            [
                'parent_id' => null,
                'name'      => 'Home',
                'slug'      => Str::slug('Home'),
                'url'       => 'http://consultinghouse.com',
                'order'     => 1,
                'status'    => 'active',
                'icon'      => null,
                'target'    => null,
            ],


            [
                'parent_id' => null,
                'name'      => 'Business For Sale',
                'slug'      => Str::slug('Business For Sale'),
                'url'       => 'http://consultinghouse.com',
                'order'     => 2,
                'status'    => 'active',
                'icon'      => null,
                'target'    => null,

            ],

            [
                'parent_id' => null,
                'name'      => 'Investors & Buyers',
                'slug'      => Str::slug('Investors & Buyers'),
                'url'       => 'http://consultinghouse.com',
                'order'     => 3,
                'status'    => 'active',
                'icon'      => null,
                'target'    => null,

            ],

            [
                'parent_id' => null,
                'name'      => 'Consulting',
                'slug'      => Str::slug('Consulting'),
                'url'       => 'http://consultinghouse.com',
                'order'     => 4,
                'status'    => 'active',
                'icon'      => null,
                'target'    => null,

            ],
            [
                'parent_id' => null,
                'name'      => 'Company',
                'slug'      => Str::slug('Company'),
                'url'       => 'http://consultinghouse.com',
                'order'     => 5,
                'status'    => 'active',
                'icon'      => null,
                'target'    => null,

            ],

        ]);
    }
}
