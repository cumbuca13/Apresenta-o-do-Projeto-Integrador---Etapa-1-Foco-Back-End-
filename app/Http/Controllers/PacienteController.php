<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Http\Requests\StorePacienteRequest;
use App\Http\Requests\UpdatePacienteRequest;

class PacienteController extends Controller
{
    public function index()
    {
        return response()->json(Paciente::paginate(10));
    }

    public function show(Paciente $paciente)
    {
        return response()->json($paciente->load('atendimentos'));
    }

    public function store(StorePacienteRequest $request)
    {
        $paciente = Paciente::create($request->validated());
        return response()->json($paciente, 201);
    }

    public function update(UpdatePacienteRequest $request, Paciente $paciente)
    {
        $paciente->update($request->validated());
        return response()->json($paciente);
    }

    public function destroy(Paciente $paciente)
    {
        $paciente->delete();
        return response()->noContent();
    }
}
