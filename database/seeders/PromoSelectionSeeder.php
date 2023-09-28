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
                'price' => 60000
            ],
            [
                'promo' => '10 Star Legend',
                'price' => 65000
            ],
            [
                'promo' => '10 Star Mythic',
                'price' =>  120000
            ],
            [
                'promo' => '10 Star Mythic Honor',
                'price' => 150000
            ]
        ];

        foreach ($promos as $promo) {
            DB::table('promos')->insert($promo);
        }
    }
}
