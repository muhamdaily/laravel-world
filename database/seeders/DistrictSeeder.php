<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('districts')->delete();
        $districts = array(
            array('name' => "District1", 'city_id' => 1),
            array('name' => "District2", 'city_id' => 1),
        );
        DB::table('districts')->insert($districts);
    }
}
