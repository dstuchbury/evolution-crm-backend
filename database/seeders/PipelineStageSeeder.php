<?php

namespace Database\Seeders;

use App\Models\PipelineStage;
use Illuminate\Database\Seeder;

class PipelineStageSeeder extends Seeder
{
    public function run(): void
    {
        PipelineStage::firstOrCreate(['name' => 'initial contact', 'confidence_weighting' => 1]);
        PipelineStage::firstOrCreate(['name' => 'decision maker contact', 'confidence_weighting' => 5]);
        PipelineStage::firstOrCreate(['name' => 'need identified', 'confidence_weighting' => 30]);
        PipelineStage::firstOrCreate(['name' => 'budget identified', 'confidence_weighting' => 50]);
        PipelineStage::firstOrCreate(['name' => 'terms agreed', 'confidence_weighting' => 80]);
        PipelineStage::firstOrCreate(['name' => 'verbal agreement', 'confidence_weighting' => 90]);
        PipelineStage::firstOrCreate(['name' => 'contract signed', 'confidence_weighting' => 100]);
    }
}
