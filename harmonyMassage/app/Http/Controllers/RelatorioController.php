<?php

namespace App\Http\Controllers;

use App\Models\Relatorio;
use App\Models\User;
use Illuminate\Http\Request;

class RelatorioController extends Controller
{
    public function index()
    {
        $relatorios = Relatorio::with('massagista')->get();
        return view('relatorios.index', compact('relatorios'));
    }

    public function create()
    {
        $massagistas = User::where('tipo', 'massagista')->get();
        return view('relatorios.create', compact('massagistas'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'massagista_id' => 'required|exists:users,id',
            'descricao' => 'required|string',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date',
            'arquivo_pdf' => 'nullable|string',
        ]);

        Relatorio::create($validated);
        return redirect()->route('relatorios.index')->with('success', 'Relatório criado com sucesso!');
    }

    public function show(Relatorio $relatorio)
    {
        return view('relatorios.show', compact('relatorio'));
    }

    public function edit(Relatorio $relatorio)
    {
        $massagistas = User::where('tipo', 'massagista')->get();
        return view('relatorios.edit', compact('relatorio', 'massagistas'));
    }

    public function update(Request $request, Relatorio $relatorio)
    {
        $validated = $request->validate([
            'massagista_id' => 'required|exists:users,id',
            'descricao' => 'required|string',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date',
            'arquivo_pdf' => 'nullable|string',
        ]);

        $relatorio->update($validated);
        return redirect()->route('relatorios.index')->with('success', 'Relatório atualizado com sucesso!');
    }

    public function destroy(Relatorio $relatorio)
    {
        $relatorio->delete();
        return redirect()->route('relatorios.index')->with('success', 'Relatório removido com sucesso!');
    }
}
