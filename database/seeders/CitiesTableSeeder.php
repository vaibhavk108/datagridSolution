<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        // Cities for Andra Pradesh
         DB::table('cities')->insert([
            ['cities' => 'Visakhapatnam', 'state_id' => 1],
            ['cities' => 'Vijayawada', 'state_id' => 1],
        
        ]);

        // Cities for Arunachal Pradesh
        DB::table('cities')->insert([
            ['cities' => 'Itanagar', 'state_id' => 2],
            ['cities' => 'Naharlagun', 'state_id' => 2],
        ]);

         // Cities for Assam
        DB::table('cities')->insert([
            ['cities' => 'Guwahati', 'state_id' => 3],
            ['cities' => 'Dibrugarh', 'state_id' => 3],
        ]);

        // Cities for Bihar
        DB::table('cities')->insert([
            ['cities' => 'Patna', 'state_id' => 4],
            ['cities' => 'Gaya', 'state_id' => 4],
        ]);

        // Cities for Chhattisgarh
        DB::table('cities')->insert([
            ['cities' => 'Raipur', 'state_id' => 5],
            ['cities' => 'Bilaspur', 'state_id' => 5],
        ]);

         // Cities for Goa
        DB::table('cities')->insert([
            ['cities' => 'Panaji', 'state_id' => 6],
            ['cities' => 'Margao', 'state_id' => 6],
        ]);

        // Cities for Gujarat
        DB::table('cities')->insert([
            ['cities' => 'Ahmedabad', 'state_id' => 7],
            ['cities' => 'Surat', 'state_id' => 7],
        ]);

        // Cities for Haryana
        DB::table('cities')->insert([
            ['cities' => 'Chandigarh', 'state_id' => 8],
            ['cities' => 'Gurgaon', 'state_id' => 8],
        ]);

        // Cities for Himachal Pradesh
        DB::table('cities')->insert([
            ['cities' => 'Shimla', 'state_id' => 9],
            ['cities' => 'Manali', 'state_id' => 9],
        ]);

        // Cities for Jharkhand
        DB::table('cities')->insert([
            ['cities' => 'Ranchi', 'state_id' => 10],
            ['cities' => 'Jamshedpur', 'state_id' => 10],
        ]);

        // Cities for Karnataka
        DB::table('cities')->insert([
            ['cities' => 'Bangalore', 'state_id' => 11],
            ['cities' => 'Mysore', 'state_id' => 11],
        ]);

        // Cities for Kerala
        DB::table('cities')->insert([
            ['cities' => 'Thiruvananthapuram', 'state_id' => 12],
            ['cities' => 'Kochi', 'state_id' => 12],
        ]);

        // Cities for Madhya Pradesh
        DB::table('cities')->insert([
            ['cities' => 'Bhopal', 'state_id' => 13],
            ['cities' => 'Indore', 'state_id' => 13],
        ]);

        // Cities for Maharashtra
        DB::table('cities')->insert([
            ['cities' => 'Mumbai', 'state_id' => 14],
            ['cities' => 'Navi mumbai', 'state_id' => 14],
            ['cities' => 'Pune', 'state_id' => 14],
        ]);

        // Cities for Manipur
        DB::table('cities')->insert([
            ['cities' => 'Imphal', 'state_id' => 15],
            ['cities' => 'Thoubal', 'state_id' => 15],
        ]);

        // Cities for Meghalaya
        DB::table('cities')->insert([
            ['cities' => 'Shillong', 'state_id' => 16],
            ['cities' => 'Tura', 'state_id' => 16],
        ]);

        // Cities for Mizoram
        DB::table('cities')->insert([
            ['cities' => 'Aizawl', 'state_id' => 17],
            ['cities' => 'Lunglei', 'state_id' => 17],
        ]);

        // Cities for Nagaland
        DB::table('cities')->insert([
            ['cities' => 'Kohima', 'state_id' => 18],
            ['cities' => 'Dimapur', 'state_id' => 18],
        ]);

        // Cities for Odisha
        DB::table('cities')->insert([
            ['cities' => 'Bhubaneswar', 'state_id' => 19],
            ['cities' => 'Cuttack', 'state_id' => 19],
        ]);

        // Cities for Punjab
        DB::table('cities')->insert([
            ['cities' => 'Amritsar', 'state_id' => 20],
            ['cities' => 'Ludhiana', 'state_id' => 20],
        ]);

        // Cities for Rajasthan
        DB::table('cities')->insert([
            ['cities' => 'Jaipur', 'state_id' => 21],
            ['cities' => 'Jodhpur', 'state_id' => 21],
        ]);

        // Cities for Sikkim
        DB::table('cities')->insert([
            ['cities' => 'Gangtok', 'state_id' => 22],
            ['cities' => 'Namchi', 'state_id' => 22],
        ]);

        // Cities for Tamil Nadu
        DB::table('cities')->insert([
            ['cities' => 'Chennai', 'state_id' => 23],
            ['cities' => 'Coimbatore', 'state_id' => 23],
        ]);

        // Cities for Telangana
        DB::table('cities')->insert([
            ['cities' => 'Hyderabad', 'state_id' => 24],
            ['cities' => 'Warangal', 'state_id' => 24],
        ]);

         // Cities for Tripura
        DB::table('cities')->insert([
            ['cities' => 'Agartala', 'state_id' => 25],
            ['cities' => 'Udaipur', 'state_id' => 25],
        ]);

         // Cities for Uttar Pradesh
        DB::table('cities')->insert([
            ['cities' => 'Lucknow', 'state_id' => 26],
            ['cities' => 'Kanpur', 'state_id' => 26],
        ]);

         // Cities for Uttarakhand
        DB::table('cities')->insert([
            ['cities' => 'Dehradun', 'state_id' => 27],
            ['cities' => 'Haridwar', 'state_id' => 27],
        ]);

        // Cities for West Bengal
        DB::table('cities')->insert([
            ['cities' => 'Kolkata', 'state_id' => 28],
            ['cities' => 'Durgapur', 'state_id' => 28],
        ]);




    }
}
