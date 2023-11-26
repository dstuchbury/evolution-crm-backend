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
            'line_1' => fake('en_GB')->streetAddress(),
            'line_2' => fake('en_GB')->words(2, true),
            'line_3' => fake('en_GB')->words(2, true),
            'town_city' => fake('en_GB')->city(),
            'county_region' => fake('en_GB')->words(2, true),
            'postcode_zip' => fake('en_GB')->postcode(),
            'country_name' => fake('en_GB')->country(),
            'country_code' => fake('en_GB')->countryCode(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
