<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OpportunityRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'user_id' => ['required', 'integer'],
            'company_id' => ['required', 'integer'],
            'lead_id' => ['required'],
            'title' => ['required'],
            'description' => ['required'],
            'value' => ['required', 'numeric'],
            'current_confidence_weighting' => ['required', 'numeric'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
