<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonsRequestForm extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nume' => 'required',
            'prenume' => 'required',
            'age' => 'required'
        ];
    }

    public function messages(): array {
        return [
            'nume.required' => 'Adauga un nume!!!'
        ];

    }
}
