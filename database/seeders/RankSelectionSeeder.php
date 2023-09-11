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
                'price' => 4000,
            ],
            [
                'rank' => 'GM',
                'price' => 5000,
            ],
            [
                'rank' => 'Epic',
                'price' => 7000,
            ],
            [
                'rank' => 'Legend',
                'price' => 8000,
            ],
            [
                'rank' => 'Mythic',
                'price' => 10000,
            ],
            [
                'rank' => 'Mythic Honor',
                'price' => 11500,
            ],
            [
                'rank' => 'Mythic Glory',
                'price' => 13000,
            ],
            [
                'rank' => 'Mythic Immortal',
                'price' => 15000,
            ],
        ];

        foreach ($ranks as $rank) {
            DB::table('rank_selections')->insert($rank);
        }
    }
}
