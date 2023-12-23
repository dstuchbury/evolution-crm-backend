<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'legal_name' => ['nullable', 'string', 'min:3', 'unique:companies,legal_name'],
            'trading_name' => ['nullable', 'string', 'min:3', 'unique:companies,trading_name'],
            'company_type_id' => ['required', 'integer', 'exists:company_types,id'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
