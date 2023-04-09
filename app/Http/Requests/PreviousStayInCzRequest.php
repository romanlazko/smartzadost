<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PreviousStayInCzRequest extends FormRequest
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
            'date_of_arrival'   => 'nullable|date|after:01.01.1900',
            'purpose_of_stay'   => 'nullable|string|cz_latin_marks',
            'place_of_stay'     => 'nullable|string|cz_latin_integer',
            'from'              => 'nullable|date|after:01.01.1900',
            'till'              => 'nullable|date|after:01.01.1900',
        ];
    }
}
