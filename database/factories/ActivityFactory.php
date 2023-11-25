<?php

namespace Database\Factories;

use App\Models\Activity;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityFactory extends Factory
{
    protected $model = Activity::class;

    public function definition(): array
    {
        return [
            'company_id' => $this->faker->randomNumber(),
            'activity_status_id' => $this->faker->randomNumber(),
            'activity_type_id' => $this->faker->randomNumber(),
            'opportunity_id' => $this->faker->randomNumber(),
            'date' => Carbon::now(),
            'notes' => $this->faker->word(),
            'user_id' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
