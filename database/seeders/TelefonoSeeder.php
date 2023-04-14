<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TelefonoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('telefonos')->insert([
            [
                'RAM' => '2 GB',
                'ROM' => '1 GB',
                'procesador' => 'Snapdragon 8 Gen 2'
            ],
            [
                'RAM' => '4 GB',
                'ROM' => '2 GB',
                'procesador' => 'Apple A16 Bionic'
            ],
            [
                'RAM' => '8 GB',
                'ROM' => '4 GB',
                'procesador' => 'Snapdragon 8 Plus Gen 1'
            ],
            [
                'RAM' => '16 GB',
                'ROM' => '8 GB',
                'procesador' => 'MediaTek Dimensity 9000 Plus'
            ],
            [
                'RAM' => '32 GB',
                'ROM' => '16 GB',
                'procesador' => 'Samsung Exynos 2200'
            ],
            [
                'RAM' => '64 GB',
                'ROM' => '32 GB',
                'procesador' => 'Apple A16 Bionic'
            ],
            
        ]);
    }
}
