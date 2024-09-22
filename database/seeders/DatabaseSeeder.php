<?php

namespace Database\Seeders;

use App\Models\Kategorie;
use App\Models\Schwierigkeit;
use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@spfq.test',
        ]);

        Kategorie::insert(
            [
                ['id' => 1, 'name' => 'Verein', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 2, 'name' => 'Spieler', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 3, 'name' => 'Trainer', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 4, 'name' => 'Offizielle', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 5, 'name' => 'Stadion', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 6, 'name' => 'Spiele', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 7, 'name' => 'Andere Sparten', 'created_at' => now(), 'updated_at' => now()],
            ]
        );

        Schwierigkeit::insert(
            [
                ['id' => 1, 'name' => 'einfach', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 2, 'name' => 'mittel', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 3, 'name' => 'schwer', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 4, 'name' => 'Experte', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 5, 'name' => 'Meister', 'created_at' => now(), 'updated_at' => now()],
            ]
        );
    }
}
