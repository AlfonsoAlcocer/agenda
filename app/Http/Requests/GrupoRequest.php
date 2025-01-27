<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GrupoRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'id_grupo' => 'required',
			'nombre_grupo' => 'required|string',
			'carrera_grupo' => 'required|string',
			'num_alumnos_grupo' => 'required',
			'estado_grupo' => 'required',
        ];
    }
}
