<?php

namespace Database\Factories;

use App\Models\Opportunity;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class OpportunityFactory extends Factory
{
    protected $model = Opportunity::class;

    public function definition(): array
    {
        return [
            'user_id' => $this->faker->randomNumber(),
            'company_id' => $this->faker->randomNumber(),
            'lead_id' => $this->faker->word(),
            'title' => $this->faker->word(),
            'description' => $this->faker->text(),
            'value' => $this->faker->randomFloat(),
            'current_confidence_weighting' => $this->faker->randomFloat(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
