<?php

namespace Database\Factories;

use App\Models\Kategorie;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class KategorieFactory extends Factory
{
    protected $model = Kategorie::class;

    public function definition()
    {
        return [
            'name'       => $this->faker->name(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
