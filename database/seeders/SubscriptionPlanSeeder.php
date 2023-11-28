<?php

namespace Database\Seeders;

use App\Models\SubscriptionPlan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriptionPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [
            [
                'name'        => 'Basic',
                'slug'        => 'basic',
                'stripe_plan' => 'price_1NbdIdGJK8rdnFGBOc8Zu9dX',
                'price'       => 0,
                'status'      => 'active',
                // 'descriptions' => 'Basic Plan'
            ],
            [
                'name'        => 'Active Plan',
                'slug'        => 'active-plan',
                'stripe_plan' => 'price_1NbdJDGJK8rdnFGBuGTZ0hJb',
                'price'       => 145,
                'status'      => 'active',
                // 'descriptions' => 'Active Plan'
            ],
            [
                'name'        => 'Premium Plan',
                'slug'        => 'premium-plan',
                'stripe_plan' => 'price_1NbdJlGJK8rdnFGB6VvRqDiN',
                'price'       => 180,
                'status'      => 'active',
                // 'descriptions' => 'Premium Plan'
            ],
            [
                'name'        => 'Yearly Plan',
                'slug'        => 'yearly-plan',
                'stripe_plan' => 'price_1NbdKHGJK8rdnFGBxqQs66Ls',
                'price'       => 450,
                'status'      => 'active',
                // 'descriptions' => 'Yearly Plan'
            ]
        ];

        foreach ($plans as $plan) {
            SubscriptionPlan::create($plan);
        }
    }
}
