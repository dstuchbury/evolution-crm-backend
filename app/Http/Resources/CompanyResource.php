<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Company */
class CompanyResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'legal_name' => $this->legal_name,
            'trading_name' => $this->trading_name,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            $this->mergeWhen($this->relationLoaded('activities'), ['activities' => ActivityResource::collection($this->activities)]),
            $this->mergeWhen($this->relationLoaded('addresses'), ['addresses' => AddressResource::collection($this->addresses)]),
            $this->mergeWhen($this->relationLoaded('companyLists'), ['companyLists' => CompanyListResource::collection($this->companyLists)]),
            $this->mergeWhen($this->relationLoaded('companyType'), ['companyType' => new CompanyTypeResource($this->companyType)]),
            $this->mergeWhen($this->relationLoaded('contacts'), ['contacts' => ContactResource::collection($this->contacts)]),
        ];
    }
}
