<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeUpdateRequest extends FormRequest
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
            'first_name'    => ['required'],
            'last_name'     => ['required'],
            'middle_name'   => ['required'],
            'address'       => ['required'],
            'country_id'    => ['required'],
            'state_id'      => ['required'],
            'city_id'       => ['required'],
            'department_id' => ['required'],
            'birthdate'     => ['required'],
            'date_hired'    => ['required'],
            'zip_code'      => ['required'],
        ];
    }
}
