<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('states')->insert([
            ['state' => 'Andhra Pradesh'],
            ['state' => 'Arunachal Pradesh'],
            ['state' => 'Assam'],
            ['state' => 'Bihar'],
            ['state' => 'Chhattisgarh'],
            ['state' => 'Goa'],
            ['state' => 'Gujarat'],
            ['state' => 'Haryana'],
            ['state' => 'Himachal Pradesh'],
            ['state' => 'Jharkhand'],
            ['state' => 'Karnataka'],
            ['state' => 'Kerala'],
            ['state' => 'Madhya Pradesh'],
            ['state' => 'Maharashtra'],
            ['state' => 'Manipur'],
            ['state' => 'Meghalaya'],
            ['state' => 'Mizoram'],
            ['state' => 'Nagaland'],
            ['state' => 'Odisha'],
            ['state' => 'Punjab'],
            ['state' => 'Rajasthan'],
            ['state' => 'Sikkim'],
            ['state' => 'Tamil Nadu'],
            ['state' => 'Telangana'],
            ['state' => 'Tripura'],
            ['state' => 'Uttar Pradesh'],
            ['state' => 'Uttarakhand'],
            ['state' => 'West Bengal'],
        ]);

    }
}
