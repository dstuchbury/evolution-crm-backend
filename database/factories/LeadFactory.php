<?php

namespace Database\Factories;

use App\Models\Lead;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeadFactory extends Factory
{
    protected $model = Lead::class;

    public function definition(): array {
        return [
            'user_id' => $this->faker->randomNumber(),
            'contact_id' => $this->faker->randomNumber(),
            'company_id' => $this->faker->randomNumber(),
            'lead_source_id' => $this->faker->word(),
            'title' => $this->faker->words(3),
            'description' => $this->faker->text(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
