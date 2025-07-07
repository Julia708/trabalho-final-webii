<?php

namespace App\Http\Controllers;

use App\Models\Avaliacao;
use Illuminate\Http\Request;

class GraficoController extends Controller
{
    public function avaliacoes()
    {
        $dados = Avaliacao::selectRaw('nota, COUNT(*) as total')
            ->groupBy('nota')
            ->orderBy('nota')
            ->pluck('total', 'nota')
            ->toArray();

        $avaliacoes = [];
        for ($i = 1; $i <= 5; $i++) {
            $avaliacoes[] = $dados[$i] ?? 0;
        }

        return view('graficos.avaliacoes', compact('avaliacoes'));
    }
}
