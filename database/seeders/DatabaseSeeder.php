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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([RankSelectionSeeder::class]);

        $this->call([PromoSelectionSeeder::class]);

        $this->call([MurmerSelectionSeeder::class]);
    }
}
