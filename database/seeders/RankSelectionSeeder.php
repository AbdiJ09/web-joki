<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RankSelectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ranks = [
            [
                'rank' => 'Master',
                'price' => 'Rp.4.000',
            ],
            [
                'rank' => 'GM',
                'price' => 'Rp.5.000',
            ],
            [
                'rank' => 'Epic',
                'price' => 'Rp.7.000',
            ],
            [
                'rank' => 'Legend',
                'price' => 'Rp.8.500',
            ],
            [
                'rank' => 'Mythic',
                'price' => 'Rp.10.000',
            ],
            [
                'rank' => 'Mythic Honor',
                'price' => 'Rp.11.500',
            ],
            [
                'rank' => 'Mythic Glory',
                'price' => 'Rp.13.000',
            ],
            [
                'rank' => 'Mythic Immortal',
                'price' => 'Rp.15.000',
            ],
        ];

        foreach ($ranks as $rank) {
            DB::table('rank_selections')->insert($rank);
        }
    }
}
