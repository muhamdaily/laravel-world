<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostalCodeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('postal_codes')->delete();
        $postalCodes = array(
            array('code' => '12345', 'village_id' => 1),
            array('code' => '67890', 'village_id' => 2),
        );
        DB::table('postal_codes')->insert($postalCodes);
    }
}
