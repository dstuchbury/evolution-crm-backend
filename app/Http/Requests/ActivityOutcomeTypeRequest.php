<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivityOutcomeTypeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'confidence_weight' => ['required', 'numeric'],
            'name' => ['required', 'string'],
        ];
    }

    public function authorize(): bool {
        return true;
    }
}
