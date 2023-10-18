<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfesoresRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'documento' => ['required', 'integer'],
            'nombres' => ['required', 'min:', 'max:100'],
            'telefono' => ['min:7', 'max:10'],
            'email' => ['required', 'max:30'],
            'direccion' => ['min:10', 'max:100'],
            'ciudad' => ['min:4', 'max:20'],
        ];
    }
}
