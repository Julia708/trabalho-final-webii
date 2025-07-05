<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Agendamento;
use App\Models\User;
use Carbon\Carbon;

class AgendamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cliente = User::where('tipo', 'cliente')->first();
        $massagista = User::where('tipo', 'massagista')->first();

        if ($cliente && $massagista) {
            Agendamento::create([
                'cliente_id' => $cliente->id,
                'massagista_id' => $massagista->id,
                'data' => Carbon::now()->addDays(1)->toDateString(),
                'horario' => '14:00:00',
                'status' => 'pendente',
                'observacao' => 'Primeira massagem agendada.',
            ]);

            Agendamento::create([
                'cliente_id' => $cliente->id,
                'massagista_id' => $massagista->id,
                'data' => Carbon::now()->addDays(3)->toDateString(),
                'horario' => '10:30:00',
                'status' => 'confirmado',
                'observacao' => 'Massagem com óleos essenciais.',
            ]);
        }
    }
}
