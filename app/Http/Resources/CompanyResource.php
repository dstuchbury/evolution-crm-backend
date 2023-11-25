<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Company */
class CompanyResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $load_activities = $this->relationLoaded('activities');
        $load_addresses = $this->relationLoaded('addresses');
        $load_company_lists = $this->relationLoaded('companyLists');
        $load_company_type = $this->relationLoaded('companyType');
        $load_contacts = $this->relationLoaded('contacts');

        return [
            'id' => $this->id,
            'legal_name' => $this->legal_name,
            'trading_name' => $this->trading_name,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            $this->mergeWhen($load_activities, ['activities' => ContactResource::collection($this->activities)]),
            $this->mergeWhen($load_addresses, ['addresses' => ContactResource::collection($this->addresses)]),
            $this->mergeWhen($load_company_lists, ['companyLists' => ContactResource::collection($this->companyLists)]),
            $this->mergeWhen($load_company_type, ['companyType' => new CompanyTypeResource($this->companyType)]),
            $this->mergeWhen($load_contacts, ['contacts' => ContactResource::collection($this->contacts)]),
        ];
    }
}
