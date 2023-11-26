<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ActivityOutcomeTypeSeeder::class);
        $this->call(ActivityTypesSeeder::class);
        $this->call(ActivityStatusSeeder::class);
        $this->call(CompanyListTypeSeeder::class);
        $this->call(CompanyTypeSeeder::class);
        $this->call(PipelineStageSeeder::class);
    }
}
