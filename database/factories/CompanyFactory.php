<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\CompanyType;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    protected $model = Company::class;

    public function definition(): array
    {
        return [
            'company_type_id' => fake()->randomNumber(),
            'trading_name' => $trading_name = fake('en_GB')->company(),
            'legal_name' => $trading_name,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
