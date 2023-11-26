<?php

namespace Database\Factories;

use App\Models\Activity;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityFactory extends Factory
{
    protected $model = Activity::class;

    public function definition(): array
    {
        return [
            'company_id' => fake('en_GB')->randomNumber(),
            'activity_status_id' => fake('en_GB')->randomNumber(),
            'activity_type_id' => fake('en_GB')->randomNumber(),
            'opportunity_id' => fake('en_GB')->randomNumber(),
            'date' => Carbon::now(),
            'notes' => fake('en_GB')->word(),
            'user_id' => User::inRandomOrder(1234)->first(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
