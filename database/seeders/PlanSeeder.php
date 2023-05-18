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

                'max_request' => 10
            ],
            [
                'name' => 'Growth',

                'alias' => 'no_trial',

                'price' => 5.99,
                'description' => '25 interactions / month',

                'max_request' => 25
            ],
            [
                'name' => 'Enterprise',

                'alias' => 'no_trial',

                'price' => 10.99,
                'description' => '26 - 250 interactions / month',

                'max_request' => 250
            ],
            [
                'name' => 'Unlimited',

                'alias' => 'no_trial',

                'price' => 29.99,
                'description' => 'Unlimited interactions / month',

                'max_request' => 'unlimited'
            ]
        ];

        Plan::insert($plans);
    }
}
