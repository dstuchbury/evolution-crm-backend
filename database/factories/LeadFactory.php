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
            'user_id' => fake('en_GB')->randomNumber(),
            'contact_id' => fake('en_GB')->randomNumber(),
            'company_id' => fake('en_GB')->randomNumber(),
            'lead_source_id' => fake('en_GB')->word(),
            'title' => fake('en_GB')->words(3),
            'description' => fake('en_GB')->text(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
