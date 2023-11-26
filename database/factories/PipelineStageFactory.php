<?php

namespace Database\Factories;

use App\Models\PipelineStage;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class PipelineStageFactory extends Factory
{
    protected $model = PipelineStage::class;

    public function definition(): array
    {
        return [
            'name' => fake('en_GB')->words(2, true),
            'confidence_weighting' => fake('en_GB')->numberBetween(1, 100),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
