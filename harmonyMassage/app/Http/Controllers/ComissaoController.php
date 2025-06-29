<?php

namespace App\Http\Controllers;

use App\Models\Comissao;
use App\Models\User;
use Illuminate\Http\Request;

class ComissaoController extends Controller
{
    public function index()
    {
        $comissoes = Comissao::with(['massagista', 'gerente'])->get();
        return view('comissoes.index', compact('comissoes'));
    }

    public function create()
    {
        $massagistas = User::where('tipo', 'massagista')->get();
        $gerentes = User::where('tipo', 'gerente')->get();
        return view('comissoes.create', compact('massagistas', 'gerentes'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'massagista_id' => 'required|exists:users,id',
            'gerente_id' => 'required|exists:users,id',
            'percentual' => 'required|numeric|min:0|max:100',
            'valor_calculado' => 'required|numeric',
            'referente_mes' => 'required|string',
        ]);

        Comissao::create($validated);
        return redirect()->route('comissoes.index')->with('success', 'Comissão criada com sucesso!');
    }

    public function show(Comissao $comissao)
    {
        return view('comissoes.show', compact('comissao'));
    }

    public function edit(Comissao $comissao)
    {
        $massagistas = User::where('tipo', 'massagista')->get();
        $gerentes = User::where('tipo', 'gerente')->get();
        return view('comissoes.edit', compact('comissao', 'massagistas', 'gerentes'));
    }

    public function update(Request $request, Comissao $comissao)
    {
        $validated = $request->validate([
            'massagista_id' => 'required|exists:users,id',
            'gerente_id' => 'required|exists:users,id',
            'percentual' => 'required|numeric|min:0|max:100',
            'valor_calculado' => 'required|numeric',
            'referente_mes' => 'required|string',
        ]);

        $comissao->update($validated);
        return redirect()->route('comissoes.index')->with('success', 'Comissão atualizada com sucesso!');
    }

    public function destroy(Comissao $comissao)
    {
        $comissao->delete();
        return redirect()->route('comissoes.index')->with('success', 'Comissão removida com sucesso!');
    }
}
