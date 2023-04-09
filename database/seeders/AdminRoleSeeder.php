<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use App\Models\Country;
use App\Models\Plan;
use App\Models\UserData;

class AdminRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $admin = User::insert(
            [
                [
                    'name' => 'Admin',
                    'email' => 'admin@admin.com',
                    'password' => bcrypt('admin'),
                    'role' => 'admin'
                ],
                [
                    'name' => 'User',
                    'email' => 'user@admin.com',
                    'password' => bcrypt('user'),
                    'role' => 'user'
                ]
            ]
        );
        */

        // Create Admin user
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'role' => 'admin'
        ]);

        // Create 100 User users
        for ($i = 0; $i < 100; $i++) {

            // Get a random plan from the database
            $plan = Plan::inRandomOrder()->first();

            // Get a random country from the database
            $country = Country::inRandomOrder()->first();

            // Create a UserData record with the selected plan and country
           $userData =  UserData::create([
                'country_id' => $country->id,
                'plan_id' => $plan->id,
            ]);


            $name = Str::random(10);
            $surname = Str::random(10);
            $email = $name . $surname . '@example.com';
            $password = bcrypt('password');
            $role = 'user';
            $user_data_id = $userData->id;

            $user = User::create(compact('name',  'email', 'password', 'role', 'user_data_id'));
        }
    }
}
