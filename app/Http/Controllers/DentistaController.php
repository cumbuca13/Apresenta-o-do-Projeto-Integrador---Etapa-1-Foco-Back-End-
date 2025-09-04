<?php

namespace App\Http\Controllers;

use App\Models\Dentista;
use App\Http\Requests\StoreDentistaRequest;
use App\Http\Requests\UpdateDentistaRequest;

class DentistaController extends Controller
{
    public function index()
    {
        return response()->json(Dentista::paginate(10));
    }

    public function show(Dentista $dentista)
    {
        return response()->json($dentista->load('atendimentos'));
    }

    public function store(StoreDentistaRequest $request)
    {
        $dentista = Dentista::create($request->validated());
        return response()->json($dentista, 201);
    }

    public function update(UpdateDentistaRequest $request, Dentista $dentista)
    {
        $dentista->update($request->validated());
        return response()->json($dentista);
    }

    public function destroy(Dentista $dentista)
    {
        $dentista->delete();
        return response()->noContent();
    }
}
