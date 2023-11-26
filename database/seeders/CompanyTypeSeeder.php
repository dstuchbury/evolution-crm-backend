<?php

namespace Database\Seeders;

use App\Models\CompanyType;
use Illuminate\Database\Seeder;

class CompanyTypeSeeder extends Seeder
{
    public function run(): void
    {
        CompanyType::firstOrCreate(['name' => 'suspect']);
        CompanyType::firstOrCreate(['name' => 'prospect']);
        CompanyType::firstOrCreate(['name' => 'client']);
        CompanyType::firstOrCreate(['name' => 'supplier']);
        CompanyType::firstOrCreate(['name' => 'partner']);
        CompanyType::firstOrCreate(['name' => 'reseller']);
    }
}
