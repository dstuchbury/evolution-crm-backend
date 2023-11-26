<?php

namespace Database\Factories;

use App\Models\ActivityType;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityTypeFactory extends Factory
{
    protected $model = ActivityType::class;

    public function definition(): array
    {
        return [
            'name' => fake('en_GB')->words(2, true),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
