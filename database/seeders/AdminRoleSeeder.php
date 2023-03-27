<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
