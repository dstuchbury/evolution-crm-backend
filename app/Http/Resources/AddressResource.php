<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Address */
class AddressResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'line_1' => $this->line_1,
            'line_2' => $this->line_2,
            'line_3' => $this->line_3,
            'town_city' => $this->town_city,
            'county_region' => $this->county_region,
            'postcode_zip' => $this->postcode_zip,
            'country_name' => $this->country_name,
            'country_code' => $this->country_code,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
