<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModuloRequest extends FormRequest
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
			'id_modulo' => 'required',
			'id_maestro' => 'required',
			'id_grupo' => 'required',
			'dia_modulo' => 'required|string',
			'hora_inicio' => 'required',
			'hora_fin' => 'required',
			'materia_modulo' => 'required|string',
			'estado_modulo' => 'required',
        ];
    }
}
