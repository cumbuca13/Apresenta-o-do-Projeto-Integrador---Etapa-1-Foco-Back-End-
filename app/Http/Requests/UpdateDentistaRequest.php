<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDentistaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $id = $this->route('dentista');

        return [
            'nome' => 'sometimes|string|max:255',
            'especialidade' => 'sometimes|string|max:255',
            'telefone' => 'nullable|string|max:20',
            'email' => "sometimes|email|unique:dentistas,email,{$id}",
        ];
    }
}
