<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\User;
use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
    public function index()
    {
        $agendamentos = Agendamento::with(['cliente', 'massagista', 'pagamento'])->get();
        return view('agendamentos.index', compact('agendamentos'));
    }

    public function create()
    {
        $clientes = User::where('tipo', 'cliente')->get();
        $massagistas = User::where('tipo', 'massagista')->get();
        return view('agendamentos.create', compact('clientes', 'massagistas'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'cliente_id' => 'required|exists:users,id',
            'massagista_id' => 'required|exists:users,id',
            'data' => 'required|date',
            'horario' => 'required',
            'status' => 'required|string',
            'observacao' => 'nullable|string',
        ]);

        Agendamento::create($validated);

        return redirect()->route('agendamentos.index')->with('success', 'Agendamento criado com sucesso!');
    }

    public function show(Agendamento $agendamento)
    {
        return view('agendamentos.show', compact('agendamento'));
    }

    public function edit(Agendamento $agendamento)
    {
        $clientes = User::where('tipo', 'cliente')->get();
        $massagistas = User::where('tipo', 'massagista')->get();
        return view('agendamentos.edit', compact('agendamento', 'clientes', 'massagistas'));
    }

    public function update(Request $request, Agendamento $agendamento)
    {
        $validated = $request->validate([
            'cliente_id' => 'required|exists:users,id',
            'massagista_id' => 'required|exists:users,id',
            'data' => 'required|date',
            'horario' => 'required',
            'status' => 'required|string',
            'observacao' => 'nullable|string',
        ]);

        $agendamento->update($validated);

        return redirect()->route('agendamentos.index')->with('success', 'Agendamento atualizado com sucesso!');
    }

    public function destroy(Agendamento $agendamento)
    {
        $agendamento->delete();

        return redirect()->route('agendamentos.index')->with('success', 'Agendamento removido com sucesso!');
    }
}
