<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RankSelectionSeeder;
use Database\Seeders\PromoSelectionSeeder;
use Database\Seeders\MurmerSelectionSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([RankSelectionSeeder::class]);

        $this->call([PromoSelectionSeeder::class]);

        $this->call([MurmerSelectionSeeder::class]);

        $this->call([ClassicSelectionSeeder::class]);
        $this->call([ServicesSeeder::class]);
    }
}
