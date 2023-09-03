<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MurmerSelectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $murmers = [
            [
                'joki_murah' => 'GM V - Epic V',
                'price' => 'Rp.125.000'
            ],
            [
                'joki_murah' => 'Epic V - Legend V',
                'price' => 'Rp.175.000'
            ],
            [
                'joki_murah' => 'Legend V - Mythic',
                'price' => 'Rp.200.000'
            ],
            [
                'joki_murah' => 'GM V - Legend V',
                'price' => 'Rp.299.500'
            ],
            [
                'joki_murah' => 'Epic III - Mythic',
                'price' => 'Rp.305.200'
            ],
            [
                'joki_murah' => 'Epic II - Mythic',
                'price' => 'Rp.268.000'
            ],
            [
                'joki_murah' => 'Epic I - Mythic',
                'price' => 'Rp.233.500'
            ],
            [
                'joki_murah' => 'Mythic Grading (15 Star)',
                'price' => 'Rp.145.000'
            ],
            [
                'joki_murah' => 'Mythic 1 - Mythic 25',
                'price' => 'Rp.299.000'
            ],
            [
                'joki_murah' => 'Mythic 25 - Mythic 50',
                'price' => 'Rp.423.500'
            ],
            [
                'joki_murah' => 'Mythic 1 - Mythic 50',
                'price' => 'Rp.725.999'
            ],
            [
                'joki_murah' => 'Mythic 50 - Mythic 100',
                'price' => 'Rp.1.150.000'
            ]
        ];

        foreach ($murmers as $murmer) {
            DB::table('murmers')->insert($murmer);
        }
    }
}
