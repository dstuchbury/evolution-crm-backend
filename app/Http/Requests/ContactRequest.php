<?php

namespace App\Http\Requests;

use App\Models\Company;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function rules(): array {

        return [
            'company_id' => ['required', 'integer', 'exists:companies,id'],
            'title' => ['required', 'string', 'min:2'],
            'first_name' => ['required', 'string', 'min:2', Rule::unique('contacts')
                ->where('company_id', $this->input('company_id'))
                ->where('title', $this->input('title'))
                ->where('first_name', $this->input('first_name'))
                ->where('last_name', $this->input('last_name'))
            ],
            'last_name' => ['required', 'string', 'min:2'],
            'position' => ['nullable', 'required', 'string', 'min:3'],
        ];
    }

    public function authorize(): bool {
        return true;
    }

    public function messages(): array
    {
        return [
            'first_name.unique' => 'A contact with this name already exists for ' . Company::where('id', $this->input('company_id'))->first()->trading_name,
        ];
    }
}
