<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaestroRequest extends FormRequest
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
			'id_maestro' => 'required',
			'id_usuario' => 'required',
			'nombre_maestro' => 'required|string',
			'apellidos_maestro' => 'required|string',
			'idioma_maestro' => 'required|string',
			'estado_maestro' => 'required',
        ];
    }
}
