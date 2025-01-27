<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HorariosOficialeRequest extends FormRequest
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
			'id_horariooficial' => 'required',
			'cuatrimestre_horario_oficial' => 'required|string',
			'id_modulo' => 'required',
			'descripcion_modulo' => 'required|string',
			'estado_horario' => 'required',
        ];
    }
}
