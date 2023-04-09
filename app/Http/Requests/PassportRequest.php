<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PassportRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'number'            => 'nullable|string|cz_latin_integer',
            'country'           => 'nullable|string|cz_latin',
            'nationality'       => 'nullable|string|cz_latin',
            'country_of_birth'  => 'nullable|string|cz_latin',
            'place_of_birth'    => 'nullable|string|cz_latin_integer',
            'issued'            => 'nullable|date|after:01.01.1900',
            'expires'           => 'nullable|date|after:01.01.1900',
            'authority'         => 'nullable|string|cz_latin_marks',
        ];
    }
}
