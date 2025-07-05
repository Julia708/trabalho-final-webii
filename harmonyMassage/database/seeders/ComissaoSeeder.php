<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Comissao;
use Carbon\Carbon;

class ComissaoSeeder extends Seeder
{
    public function run(): void
    {
        $massagista = User::where('tipo', 'massagista')->first();
        $gerente = User::where('tipo', 'gerente')->first();

        if ($massagista && $gerente) {
            Comissao::create([
                'massagista_id' => $massagista->id,
                'gerente_id' => $gerente->id,
                'percentual' => 30.00,
                'valor_calculado' => 450.00,
                'referente_mes' => Carbon::now()->format('Y-m'),
            ]);

            Comissao::create([
                'massagista_id' => $massagista->id,
                'gerente_id' => $gerente->id,
                'percentual' => 25.00,
                'valor_calculado' => 320.00,
                'referente_mes' => Carbon::now()->subMonth()->format('Y-m'),
            ]);
        }
    }
}
