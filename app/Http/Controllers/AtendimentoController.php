<?php

namespace App\Http\Controllers;

use App\Models\Atendimento;
use App\Http\Requests\StoreAtendimentoRequest;
use App\Http\Requests\UpdateAtendimentoRequest;

class AtendimentoController extends Controller
{
    public function index()
    {
        return response()->json(Atendimento::with(['paciente', 'dentista'])->paginate(10));
    }

    public function show(Atendimento $atendimento)
    {
        return response()->json($atendimento->load(['paciente', 'dentista']));
    }

    public function store(StoreAtendimentoRequest $request)
    {
        $atendimento = Atendimento::create($request->validated());
        return response()->json($atendimento->load(['paciente','dentista']), 201);
    }

    public function update(UpdateAtendimentoRequest $request, Atendimento $atendimento)
    {
        $atendimento->update($request->validated());
        return response()->json($atendimento->load(['paciente','dentista']));
    }

    public function destroy(Atendimento $atendimento)
    {
        $atendimento->delete();
        return response()->noContent();
    }
}
