<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'line_1' => ['required', 'string', 'min:5'],
            'line_2' => ['nullable', 'string'],
            'line_3' => ['nullable', 'string'],
            'town_city' => ['required', 'string', 'min:3'],
            'county_region' => ['nullable', 'string'],
            'postcode_zip' => ['nullable', 'string'],
            'country_name' => ['nullable', 'string', 'min:3'],
            'country_code' => ['nullable', 'string', 'max:2'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
