<?php

namespace Database\Factories;

use App\Models\Antwort;
use App\Models\Frage;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AntwortFactory extends Factory
{
    protected $model = Antwort::class;

    public function definition(): array
    {
        return [
            'antwort' => $this->faker->word(),
            'richtig' => $this->faker->boolean(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'fragen_id' => Frage::factory(),
        ];
    }
}
