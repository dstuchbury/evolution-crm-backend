<?php

namespace Database\Seeders;

use App\Models\ActivityType;
use Illuminate\Database\Seeder;

class ActivityTypesSeeder extends Seeder
{
    public function run(): void
    {
        ActivityType::firstOrCreate(['name' => 'note']);
        ActivityType::firstOrCreate(['name' => 'email']);
        ActivityType::firstOrCreate(['name' => 'phone call']);
        ActivityType::firstOrCreate(['name' => 'online meeting']);
        ActivityType::firstOrCreate(['name' => 'in-person meeting']);
    }
}
