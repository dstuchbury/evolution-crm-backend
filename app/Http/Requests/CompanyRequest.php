<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'legal_name' => ['nullable', 'string', 'min:3'],
            'trading_name' => ['nullable', 'string', 'min:3'],
            'company_type_id' => ['required', 'integer', 'exists:company_types,id'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
