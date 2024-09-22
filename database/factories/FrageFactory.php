<?php

namespace Database\Factories;

use App\Models\Frage;
use App\Models\Kategorie;
use App\Models\Schwierigkeit;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class FrageFactory extends Factory
{
    protected $model = Frage::class;

    public function definition(): array
    {
        return [
            'frage' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'schwierigkeiten_id' => Schwierigkeit::factory(),
            'kategorien_id' => Kategorie::factory(),
        ];
    }
}
