<?php

namespace Database\Seeders;

use App\Models\Kategorie;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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

        $kategorien = [
            ['id' => 0, 'name' => 'Verein', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 1, 'name' => 'Spieler','created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Trainer','created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Offizielle','created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'Stadion','created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => 'Spiele','created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'name' => 'Andere Sparten','created_at' => now(), 'updated_at' => now()],
        ];

        Kategorie::insert($kategorien);
    }
}
