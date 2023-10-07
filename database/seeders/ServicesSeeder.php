<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Joki Classic(Up Winrate)',
                'slug' => 'joki-classic',
                'gambar' => 'irithel.jpg'
            ],
            [
                'name' => 'Joki Rank',
                'slug' => 'joki-rank',
                'gambar' => 'lance.jpg'
            ],
            [
                'name' => 'Jasa Gendong(Classic/Rank)',
                'slug' => 'joki-gendong',
                'gambar' => 'lesti.jpg'
            ],


        ];

        foreach ($services as $service) {
            DB::table('services')->insert($service);
        }
    }
}
