<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Activity */
class ActivityResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'company_id' => $this->company_id,
            'activity_status_id' => $this->activity_status_id,
            'activity_type_id' => $this->activity_type_id,
            'opportunity_id' => $this->opportunity_id,
            'date' => $this->date,
            'notes' => $this->notes,
            'user_id' => $this->user_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            $this->mergeWhen($this->relationLoaded('contacts'), ['contacts' => ContactResource::collection($this->contacts)]),

        ];
    }
}
