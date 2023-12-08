<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VillageSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('villages')->delete();
        $villages = array(
            array('name' => "Village1", 'district_id' => 1),
            array('name' => "Village2", 'district_id' => 1),
        );
        DB::table('villages')->insert($villages);
    }
}
