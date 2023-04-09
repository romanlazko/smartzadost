<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OccupationRequest extends FormRequest
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
            'occupation'    => 'nullable|sometimes|string|cz_latin_integer',
            'employer'      => 'nullable|sometimes|string|cz_latin_integer',
            'street'        => 'nullable|sometimes|string|cz_latin',
            'number'        => 'nullable|sometimes|string|cz_latin_integer|required_with:street',
            'town'          => 'nullable|sometimes|string|cz_latin_integer|required_with:street',
            'country'       => 'nullable|sometimes|string|cz_latin|required_with:street',
            'post_code'     => 'nullable|sometimes|string|numeric|required_with:street',
            'contact'       => 'nullable|sometimes|string',
            'from'          => 'nullable|sometimes|date|after:01.01.1900',
            'till'          => 'nullable|sometimes|date|after:01.01.1900',
        ];
    }
}
