<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FrageRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'frage' => ['required'],
            'schwierigkeiten_id' => ['required', 'exists:schwierigkeiten'],
            'kategorien_id' => ['required', 'exists:kategorien'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
