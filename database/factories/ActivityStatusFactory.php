<?php

namespace Database\Factories;

use App\Models\ActivityStatus;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityStatusFactory extends Factory
{
    protected $model = ActivityStatus::class;

    public function definition(): array {
        return [
            'name' => $this->faker->words(1),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
