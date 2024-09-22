<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AntwortRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'antwort' => ['required'],
            'richtig' => ['boolean'],
            'fragen_id' => ['required', 'exists:fragen'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
