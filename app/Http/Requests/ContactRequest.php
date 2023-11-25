<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function rules(): array {
        return [
            'company_id' => ['required', 'integer'],
            'title' => ['required', 'string', 'min:2'],
            'first_name' => ['required', 'string', 'min:5'],
            'last_name' => ['required', 'string', 'min:5'],
            'position' => ['nullable', 'required', 'string', 'min:3'],
        ];
    }

    public function authorize(): bool {
        return true;
    }
}
