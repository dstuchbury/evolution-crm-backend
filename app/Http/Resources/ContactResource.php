<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Contact */
class ContactResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'position' => $this->position,
//            'created_at' => $this->created_at,
//            'updated_at' => $this->updated_at,

            $this->mergeWhen($this->relationLoaded('activities'), ['activities' => ActivityResource::collection($this->activities)]),
            $this->mergeWhen($this->relationLoaded('company'), ['company' => new CompanyResource($this->company)]),
            $this->mergeWhen($this->relationLoaded('leads'), ['leads' => LeadResource::collection($this->leads)]),
            $this->mergeWhen($this->relationLoaded('opportunities'), ['opportunities' => OpportunityResource::collection($this->opportunities)]),
        ];
    }
}
