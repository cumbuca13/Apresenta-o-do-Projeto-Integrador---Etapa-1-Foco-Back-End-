<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePacienteRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $id = $this->route('paciente');

        return [
            'nome' => 'sometimes|string|max:255',
            'telefone' => 'nullable|string|max:20',
            'email' => "sometimes|email|unique:pacientes,email,{$id}",
            'data_nascimento' => 'sometimes|date',
        ];
    }
}
