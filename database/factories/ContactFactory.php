<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition(): array
    {
        return [
            'company_id' => $this->faker->randomNumber(),
            'title' => $this->faker->word(),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'position' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
