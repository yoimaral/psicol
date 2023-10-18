<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstudiantesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this EstudiantesRequest.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the EstudiantesRequest.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
