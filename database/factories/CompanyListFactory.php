<?php

namespace Database\Factories;

use App\Models\CompanyList;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyListFactory extends Factory
{
    protected $model = CompanyList::class;

    public function definition(): array
    {
        return [
            'company_list_type_id' => $this->faker->randomNumber(),
            'name' => $this->faker->name(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
