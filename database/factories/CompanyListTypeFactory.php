<?php

namespace Database\Factories;

use Illuminate\Support\Carbon;
use App\Models\CompanyListType;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyListTypeFactory extends Factory
{
    protected $model = CompanyListType::class;

    public function definition(): array
    {
        return [
            'name' => fake('en_GB')->words(2),
            'active_from' => Carbon::now(),
            'active_to' => Carbon::now()->addDays(60),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
