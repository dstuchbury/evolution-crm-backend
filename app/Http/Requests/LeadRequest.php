<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeadRequest extends FormRequest
{
    public function rules(): array {
        return [
            'user_id' => ['nullable', 'integer', 'exists:users,id'],
            'contact_id' => ['nullable', 'integer', 'exists:contacts,id'],
            'company_id' => ['required', 'integer', 'exists:companies.id'],
            'lead_source_id' => ['required', 'integer', 'exists:lead_sources,id'],
            'title' => ['required', 'string', 'min:5'],
            'description' => ['required', 'string', 'min:10'],
        ];
    }

    public function authorize(): bool {
        return true;
    }
}
