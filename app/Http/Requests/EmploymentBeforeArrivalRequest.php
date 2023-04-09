<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmploymentBeforeArrivalRequest extends FormRequest
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
            'employer'      => 'nullable|string|cz_latin_marks',
            'position'      => 'nullable|string|cz_latin_marks',
            'street'        => 'nullable|sometimes|string|cz_latin',
            'number'        => 'nullable|sometimes|string|cz_latin_integer|required_with:street',
            'town'          => 'nullable|sometimes|string|cz_latin_integer|required_with:street',
            'country'       => 'nullable|sometimes|string|cz_latin|required_with:street',
            'post_code'     => 'nullable|sometimes|string|numeric|required_with:street',
        ];
    }
}
