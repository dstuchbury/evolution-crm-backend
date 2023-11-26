<?php

namespace Database\Seeders;

use App\Models\ActivityOutcomeType;
use Illuminate\Database\Seeder;

class ActivityOutcomeTypeSeeder extends Seeder
{
    public function run(): void
    {
        ActivityOutcomeType::firstOrCreate(['name' => 'decision maker contact', 'confidence_weight' => 5]);
        ActivityOutcomeType::firstOrCreate(['name' => 'meeting arranged', 'confidence_weight' => 10]);
    }
}
