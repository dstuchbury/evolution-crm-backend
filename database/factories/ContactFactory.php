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
            'company_id' => fake('en_GB')->randomNumber(),
            'title' => fake('en_GB')->word(),
            'first_name' => fake('en_GB')->firstName(),
            'last_name' => fake('en_GB')->lastName(),
            'position' => fake('en_GB')->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
