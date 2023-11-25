<?php

namespace Database\Factories;

use Illuminate\Support\Carbon;
use App\Models\ActivityOutcomeType;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityOutcomeTypeFactory extends Factory
{
    protected $model = ActivityOutcomeType::class;

    public function definition(): array {
        return [
            'confidence_weight' => $this->faker->randomFloat(),
            'name' => $this->faker->words(2),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
