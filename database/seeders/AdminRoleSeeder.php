<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use App\Models\Country;
use App\Models\Plan;
use App\Models\UserData;
use App\Payments\PaymentGateways\PaymentFactory;
use App\Models\Card;

use App\Services\UserDataService;

class AdminRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cards = [
            [
                'card_number' => '4242 4242 4242 4242',
                'exp_month' => rand(1, 12),
                'exp_year' => rand(2024, 2029),
                'cvc' => rand(100, 999)
            ],
            [
                'card_number' => '4000 0000 0000 0002',
                'exp_month' => rand(1, 12),
                'exp_year' => rand(2024, 2029),
                'cvc' => rand(100, 999)
            ]
        ];

        // Create Admin user
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'role' => 'admin'
        ]);

        $firstNames = ['Alice', 'Bob', 'Charlie', 'David', 'Eve', 'Frank', 'Grace', 'Henry', 'Isabella', 'Jack', 'Kate', 'Liam', 'Mia', 'Noah', 'Olivia', 'Penny', 'Quinn', 'Ruby', 'Samantha', 'Tom', 'Ursula', 'Violet', 'William', 'Xander', 'Yvonne', 'Zachary'];
        $lastNames = ['Smith', 'Johnson', 'Williams', 'Jones', 'Brown', 'Davis', 'Miller', 'Wilson', 'Moore', 'Taylor', 'Anderson', 'Thomas', 'Jackson', 'White', 'Harris', 'Martin', 'Thompson', 'Garcia', 'Martinez', 'Robinson'];


        // Create 100 000 User users
        for ($i = 0; $i < 100000; $i++) {

            // Get a random plan from the database
            $plan = Plan::inRandomOrder()->first();

            // Get a random country from the database
            $country = Country::inRandomOrder()->first();

            // Create a UserData record with the selected plan and country
            // dd($plan->alias);
            $userData =  UserData::create([
                'country_id' => $country->id,
                'plan_id' => $plan->id,
            ]);

            $firstName = $firstNames[rand(0, count($firstNames) - 1)];

            $name =  $firstName . ' ' . $lastNames[rand(0, count($lastNames) - 1)];
            $email = 'user' . $i . '@admin.com';
            $password = bcrypt('password');
            $role = 'user';
            $user_data_id = $userData->id;

            $user = User::create(compact('name',  'email', 'password', 'role', 'user_data_id'));

            if ($plan->alias == 'no_trial') {
                $card = Card::create($cards[rand(0,1)]);

                $price = floatval($userData->plan->price);
                $payment = PaymentFactory::create();
                UserDataService::update($user->id, $user->userData, ['card_id' => $card->id]);
            }
        }
    }
}
