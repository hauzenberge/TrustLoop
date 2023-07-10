<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Plan;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            [
                'name' => 'Trial',

                'alias' => 'trial',

                'price' => 0,
                'description' => '10 interactions / month',

                'features' => json_encode([
                    'Access to basic features',
                    'Basic reporting and analytics',
                    '1 individual user',
                    'Up to 20 feedback widget interactions/ratings total',
                    'Basic email support'
                ]),

                'max_request' => 10
            ],
            [
                'name' => 'Growth',

                'alias' => 'no_trial',

                'price' => 27,
                'description' => '25 interactions / month',
                'features' => json_encode([
                    'Access to basic features',
                    'Basic reporting and analytics',
                    '1 individual user',
                    'Up to 100 feedback interactions per month',
                    'Preferred email support'
                ]),

                'max_request' => 25
            ],

            [
                'name' => 'Business',

                'alias' => 'no_trial',

                'price' => 47,
                'description' => 'Up to 500 feedback interactions/month',
                'features' => json_encode([
                    'Access to advanced features',
                    'Plus reporting &amp; analytics',
                    'Up to 3 individual users',
                    'Up to 500 feedback interactions per month',
                    'Basic chat &amp; priority email support'
                ]),

                'max_request' => 500
            ],
            [
                'name' => 'Enterprise',

                'alias' => 'no_trial',

                'price' => 10.99,
                'description' => 'Unlimited feedback interactions/month',
                'features' => json_encode([
                    'Access to advanced features',
                    'Plus reporting and analytics',
                    'Up to 10 individual users',
                    'Unlimited feedback interactions per month',
                    'Priority chat &amp; 24/7 email support'
                ]),

                'max_request' => 'unlimited'
            ],
        ];

        Plan::insert($plans);
    }
}
