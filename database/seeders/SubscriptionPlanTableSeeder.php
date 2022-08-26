<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubscriptionPlan;

class SubscriptionPlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subscriptionPlans = [
            [
                'name' => 'Basic',
                'price' => 249000,
                'active_period_in_months' => 3,
                'features' => json_encode(['Feature 1', 'Feature 2', 'Feature 3'])
            ],
            [
                'name' => 'Premium',
                'price' => 399000,
                'active_period_in_months' => 3,
                'features' => json_encode(['Feature 1', 'Feature 2', 'Feature 3', 'Feature 4', 'Feature 5', 'Feature 6', 'Feature 7'])
            ]
        ];

        SubscriptionPlan::insert($subscriptionPlans);
    }
}
