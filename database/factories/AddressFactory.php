<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    protected $model = Address::class;

    public function definition(): array
    {
        return [
            'line_1' => $this->faker->word(),
            'line_2' => $this->faker->word(),
            'line_3' => $this->faker->word(),
            'town_city' => $this->faker->city(),
            'county_region' => $this->faker->word(),
            'postcode_zip' => $this->faker->postcode(),
            'country_name' => $this->faker->name(),
            'country_code' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
