<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PipelineStageRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'confidence_weighting' => ['required', 'numeric'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
