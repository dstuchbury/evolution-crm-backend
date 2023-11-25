<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    protected $model = Company::class;

    public function definition(): array
    {
        return [
            'company_type_id' => $this->faker->randomNumber(),
            'trading_name' => $this->faker->company(),
            'legal_name' => $this->faker->company() . ' ' . $this->faker->companySuffix(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
