<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivityRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'company_id' => ['required', 'integer'],
            'activity_status_id' => ['required', 'integer'],
            'activity_type_id' => ['required', 'integer'],
            'opportunity_id' => ['nullable', 'integer'],
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'date' => ['required', 'date'],
            'notes' => ['required', 'min:5'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
