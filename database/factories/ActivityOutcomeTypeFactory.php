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
            'confidence_weight' => fake('en_GB')->numberBetween(1, 100),
            'name' => fake('en_GB')->words(2, true),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
