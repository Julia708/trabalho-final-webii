<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avaliacao;
use App\Models\Agendamento;
use Illuminate\Support\Facades\Auth;

class AvaliacaoController extends Controller
{
    public function index()
    {
        $avaliacoes = Avaliacao::with('agendamento')->get();
        return view('avaliacoes.index', compact('avaliacoes'));
    }

    public function create($agendamentoId)
    {
        $agendamento = Agendamento::findOrFail($agendamentoId);
        return view('avaliacoes.create', compact('agendamento'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'agendamento_id' => 'required|exists:agendamentos,id',
            'nota' => 'required|integer|min:1|max:5',
            'comentario' => 'nullable|string',
        ]);

        Avaliacao::create([
            'agendamento_id' => $request->agendamento_id,
            'user_id' => Auth::id(),
            'nota' => $request->nota,
            'comentario' => $request->comentario,
        ]);

        return redirect()->route('avaliacoes.index')->with('success', 'Avaliação enviada com sucesso.');
    }
}
