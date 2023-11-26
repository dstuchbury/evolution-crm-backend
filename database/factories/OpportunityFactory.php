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
            'user_id' => fake('en_GB')->randomNumber(),
            'company_id' => fake('en_GB')->randomNumber(),
            'lead_id' => fake('en_GB')->word(),
            'title' => fake('en_GB')->word(),
            'description' => fake('en_GB')->text(),
            'value' => fake('en_GB')->randomFloat(),
            'current_confidence_weighting' => fake('en_GB')->randomFloat(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
