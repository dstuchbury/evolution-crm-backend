<?php

namespace Database\Seeders;

use App\Models\CompanyListType;
use Illuminate\Database\Seeder;

class CompanyListTypeSeeder extends Seeder
{
    public function run(): void
    {
        CompanyListType::firstOrCreate(['name' => 'sales campaign']);
        CompanyListType::firstOrCreate(['name' => 'client categorisation']);
        CompanyListType::firstOrCreate(['name' => 'supplier categorisation']);
    }
}
