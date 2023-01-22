<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            [
            'id'         => 1,
            'name'       => 'Kathmandu',
            'short_code' => 'ktm',
            ],
            [
                'id'         => 2,
                'name'       => 'Bhaktapur',
                'short_code' => 'bkt',
            ], 
            [
                'id'         => 3,
                'name'       => 'lalitpur',
                'short_code' => 'la',
            ]];


            Country::insert($countries);

    }
}
