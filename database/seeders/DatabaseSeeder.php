<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\RfqSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\AdminSeeder;
use Database\Seeders\BrandSeeder;
use Database\Seeders\OrderSeeder;
use Database\Seeders\StateSeeder;
use Database\Seeders\CouponSeeder;
use Database\Seeders\ReviewSeeder;
use Database\Seeders\CountrySeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\PreOrderSeeder;
use Database\Seeders\OrderItemSeeder;
use Database\Seeders\WareHouseSeeder;
use Database\Seeders\ClientTypeSeeder;
use Database\Seeders\EntityTypeSeeder;
use Database\Seeders\PreBookingSeeder;
use Database\Seeders\PickUpPointSeeder;
use Database\Seeders\SubCategorySeeder;
use Database\Seeders\ProductDraftSeeder;
use Database\Seeders\AdvertisementSeeder;
use Database\Seeders\ChildCategorySeeder;
use Database\Seeders\FilteringItemSeeder;
use Database\Seeders\PaymentMethodSeeder;
use Database\Seeders\BillingAddressSeeder;
use Database\Seeders\GroupPermissionSeeder;
use Database\Seeders\ShippingAddressSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            AdminSeeder::class,
            // BrandSeeder::class,
            // CategorySeeder::class,
            // SubCategorySeeder::class,
            // ChildCategorySeeder::class,
            GroupPermissionSeeder::class,
            // ProductSeeder::class,
            CountrySeeder::class,
            StateSeeder::class,
            PaymentMethodSeeder::class,
            // WareHouseSeeder::class,
            // PickUpPointSeeder::class,
            // CouponSeeder::class,
            // AdvertisementSeeder::class,
            // FilteringItemSeeder::class,
            // ReviewSeeder::class,
            // RfqSeeder::class,
            // PreBookingSeeder::class,
            // PreOrderSeeder::class,
            // OrderSeeder::class,
            // OrderItemSeeder::class,
            // BillingAddressSeeder::class,
            // ShippingAddressSeeder::class,
            // ProductDraftSeeder::class,
            ProfileTypeSeeder::class,
            ClientTypeCategorySeeder::class,
            ClientTypeSeeder::class,
            IndustrySectorSeeder::class,
            IndustrySeeder::class,
            SubscriptionPlanSeeder::class,
            TransactionTypeSeeder::class,
            EntityTypeSeeder::class,
            FrontendMenuSeeder::class,
        ]);
    }
}
