<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyListRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'company_list_type_id' => ['required', 'integer', 'exists:company_lists,id'],
            'name' => ['required', 'string', 'min:3'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
