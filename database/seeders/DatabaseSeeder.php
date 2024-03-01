<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Score; // Assuming Score model exists and matches the migration structure

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Creating random scores
        for ($i = 0; $i < 10; $i++) {
            Score::create([
                'name' => 'Player ' . $i,
                'score' => rand(1, 1000), // Random score between 1 and 1000
            ]);
        }
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

