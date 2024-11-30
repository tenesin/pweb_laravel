<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FlashdiskSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');

        // Generate a range of unique numbers from 000 to 100
        $uniqueCodes = range(0, 100);
        shuffle($uniqueCodes); // Randomize the order

        foreach ($uniqueCodes as $code) {
            $stok = $faker->numberBetween(0, 50); 
            DB::table('flashdisk')->insert([
                'kodeflashdisk' => str_pad($code, 3, '0', STR_PAD_LEFT), // Format as 3 digits (e.g., 000, 001)
                'merkflashdisk' => $faker->company,
                'stokflashdisk' => $stok,
                'tersedia' => $stok > 0 ? 'y' : 'n',
            ]);
        }
    }
}
