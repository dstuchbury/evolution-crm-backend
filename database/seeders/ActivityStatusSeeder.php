<?php

namespace Database\Seeders;

use App\Models\ActivityStatus;
use Illuminate\Database\Seeder;

class ActivityStatusSeeder extends Seeder
{
    public function run(): void
    {
        ActivityStatus::firstOrCreate(['name' => 'scheduled']);
        ActivityStatus::firstOrCreate(['name' => 'in progress']);
        ActivityStatus::firstOrCreate(['name' => 'complete']);
    }
}
