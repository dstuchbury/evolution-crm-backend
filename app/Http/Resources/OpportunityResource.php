<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Opportunity */
class OpportunityResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'company_id' => $this->company_id,
            'lead_id' => $this->lead_id,
            'title' => $this->title,
            'description' => $this->description,
            'value' => $this->value,
            'current_confidence_weighting' => $this->current_confidence_weighting,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
