<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\PipelineStage */
class PipelineStageResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'confidence_weighting' => $this->confidence_weighting,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
