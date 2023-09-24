<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassicSelectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classics = [
            [
                'name_classic' => 'Joki Classic',
                'price' => 3000,
            ],
            [
                'name_classic' => 'Joki Classic Rank Glory',
                'price' => 4500,
            ],

        ];

        foreach ($classics as $classic) {
            DB::table('select_classics')->insert($classic);
        }
    }
}
