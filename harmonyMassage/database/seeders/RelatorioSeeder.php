<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Relatorio;
use App\Models\User;
use Carbon\Carbon;

class RelatorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $massagista = User::where('tipo', 'massagista')->first();

        if ($massagista) {
            Relatorio::create([
                'massagista_id' => $massagista->id,
                'descricao' => 'Relatório semanal das atividades realizadas.',
                'data_inicio' => Carbon::now()->subDays(7)->toDateString(),
                'data_fim' => Carbon::now()->toDateString(),
                'arquivo_pdf' => 'relatorio_semanal.pdf',
            ]);

            Relatorio::create([
                'massagista_id' => $massagista->id,
                'descricao' => 'Relatório do mês anterior com detalhes dos atendimentos.',
                'data_inicio' => Carbon::now()->subMonth()->startOfMonth()->toDateString(),
                'data_fim' => Carbon::now()->subMonth()->endOfMonth()->toDateString(),
                'arquivo_pdf' => 'relatorio_mensal.pdf',
            ]);
        }
    }
}
