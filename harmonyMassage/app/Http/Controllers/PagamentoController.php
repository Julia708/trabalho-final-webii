<?php

namespace App\Http\Controllers;

use App\Models\Pagamento;
use App\Models\Agendamento;
use Illuminate\Http\Request;

class PagamentoController extends Controller
{
    public function index()
    {
        $pagamentos = Pagamento::with('agendamento')->get();
        return view('pagamentos.index', compact('pagamentos'));
    }

    public function create()
    {
        $agendamentos = Agendamento::all();
        return view('pagamentos.create', compact('agendamentos'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'agendamento_id' => 'required|exists:agendamentos,id',
            'metodo' => 'required|string',
            'valor' => 'required|numeric',
            'status' => 'required|string',
            'comprovante' => 'nullable|string',
            'data_pagamento' => 'required|date',
        ]);

        Pagamento::create($validated);
        return redirect()->route('pagamentos.index')->with('success', 'Pagamento registrado com sucesso!');
    }

    public function show(Pagamento $pagamento)
    {
        return view('pagamentos.show', compact('pagamento'));
    }

    public function edit(Pagamento $pagamento)
    {
        $agendamentos = Agendamento::all();
        return view('pagamentos.edit', compact('pagamento', 'agendamentos'));
    }

    public function update(Request $request, Pagamento $pagamento)
    {
        $validated = $request->validate([
            'agendamento_id' => 'required|exists:agendamentos,id',
            'metodo' => 'required|string',
            'valor' => 'required|numeric',
            'status' => 'required|string',
            'comprovante' => 'nullable|string',
            'data_pagamento' => 'required|date',
        ]);

        $pagamento->update($validated);
        return redirect()->route('pagamentos.index')->with('success', 'Pagamento atualizado com sucesso!');
    }

    public function destroy(Pagamento $pagamento)
    {
        $pagamento->delete();
        return redirect()->route('pagamentos.index')->with('success', 'Pagamento removido com sucesso!');
    }
}
