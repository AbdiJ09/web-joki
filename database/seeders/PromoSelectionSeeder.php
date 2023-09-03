<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PromoSelectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $promos = [
            [
                'promo' => '10 Star Epic',
                'price' => 'Rp.62.500'
            ],
            [
                'promo' => '10 Star Legend',
                'price' => 'Rp.70.000'
            ],
            [
                'promo' => '10 Star Mythic',
                'price' => 'Rp.130.500'
            ],
            [
                'promo' => '10 Star Mythic Honor',
                'price' => 'Rp.154.000'
            ]
        ];

        foreach ($promos as $promo) {
            DB::table('promos')->insert($promo);
        }
    }
}
