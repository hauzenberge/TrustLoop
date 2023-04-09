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
                'price' => 0,
                'description' => '10 interactions / month'
            ],
            [
                'name' => 'Growth',
                'price' => 5.99,
                'description' => '25 interactions / month'
            ],
            [
                'name' => 'Enterprise',
                'price' => 10.99,
                'description' => '26 - 250 interactions / month'
            ],
            [
                'name' => 'Unlimited',
                'price' => 29.99,
                'description' => 'Unlimited interactions / month'
            ]
        ];


        Plan::insert($plans);
    }
}
