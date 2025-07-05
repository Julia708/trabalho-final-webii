<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Avaliacao;
use App\Models\User;
use Carbon\Carbon;

class AvaliacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cliente = User::where('tipo', 'cliente')->first();
        $massagista = User::where('tipo', 'massagista')->first();

        if ($cliente && $massagista) {
            Avaliacao::create([
                'cliente_id' => $cliente->id,
                'massagista_id' => $massagista->id,
                'comentario' => 'Excelente atendimento e ambiente tranquilo.',
                'nota' => 5,
                'data' => Carbon::now()->subDays(2)->toDateString(),
            ]);

            Avaliacao::create([
                'cliente_id' => $cliente->id,
                'massagista_id' => $massagista->id,
                'comentario' => 'Gostei muito da massagem, voltarei mais vezes.',
                'nota' => 4,
                'data' => Carbon::now()->toDateString(),
            ]);
        }
    }
}
