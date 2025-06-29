<?php

namespace App\Http\Controllers;

use App\Models\Avaliacao;
use App\Models\User;
use Illuminate\Http\Request;

class AvaliacaoController extends Controller
{
    public function index()
    {
        $avaliacoes = Avaliacao::with(['cliente', 'massagista'])->get();
        return view('avaliacoes.index', compact('avaliacoes'));
    }

    public function create()
    {
        $clientes = User::where('tipo', 'cliente')->get();
        $massagistas = User::where('tipo', 'massagista')->get();
        return view('avaliacoes.create', compact('clientes', 'massagistas'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'cliente_id' => 'required|exists:users,id',
            'massagista_id' => 'required|exists:users,id',
            'comentario' => 'nullable|string',
            'nota' => 'required|integer|min:1|max:5',
            'data' => 'required|date',
        ]);

        Avaliacao::create($validated);
        return redirect()->route('avaliacoes.index')->with('success', 'Avaliação criada com sucesso!');
    }

    public function show(Avaliacao $avaliacao)
    {
        return view('avaliacoes.show', compact('avaliacao'));
    }

    public function edit(Avaliacao $avaliacao)
    {
        $clientes = User::where('tipo', 'cliente')->get();
        $massagistas = User::where('tipo', 'massagista')->get();
        return view('avaliacoes.edit', compact('avaliacao', 'clientes', 'massagistas'));
    }

    public function update(Request $request, Avaliacao $avaliacao)
    {
        $validated = $request->validate([
            'cliente_id' => 'required|exists:users,id',
            'massagista_id' => 'required|exists:users,id',
            'comentario' => 'nullable|string',
            'nota' => 'required|integer|min:1|max:5',
            'data' => 'required|date',
        ]);

        $avaliacao->update($validated);
        return redirect()->route('avaliacoes.index')->with('success', 'Avaliação atualizada com sucesso!');
    }

    public function destroy(Avaliacao $avaliacao)
    {
        $avaliacao->delete();
        return redirect()->route('avaliacoes.index')->with('success', 'Avaliação removida com sucesso!');
    }
}
