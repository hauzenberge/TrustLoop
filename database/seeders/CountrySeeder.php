<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            'Ukraine',
            'USA',
            'Canada',
            'France',
            'Germany',
            'Italy',
            'Spain',
            'Japan',
            'China',
            'India',
            'Brazil',
            'Mexico',
            'Argentina',
            'Australia',
            'South Korea',
            'Indonesia',
            'Turkey',
            'Iran',
            'Egypt',
            'Nigeria',
            'South Africa',
        ];

        foreach ($countries as $country) {
            if ($country != 'Russia') {
                Country::insert(['name' => $country]);
            }
        }
    }
}
