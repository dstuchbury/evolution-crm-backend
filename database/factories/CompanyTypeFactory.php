<?php

namespace Database\Factories;

use App\Models\CompanyType;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyTypeFactory extends Factory
{
    protected $model = CompanyType::class;

    public function definition(): array
    {
        return [
            'name' => fake('en_GB')->name(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
