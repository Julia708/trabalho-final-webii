<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Agendamento;
use App\Models\Pagamento;
use Carbon\Carbon;

class PagamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $agendamento = Agendamento::first();

        if ($agendamento) {
            Pagamento::create([
                'agendamento_id' => $agendamento->id,
                'metodo' => 'PIX',
                'valor' => 120.00,
                'status' => 'pago',
                'comprovante' => 'comprovante_pix.jpg',
                'data_pagamento' => Carbon::now()->toDateString(),
            ]);

            Pagamento::create([
                'agendamento_id' => $agendamento->id,
                'metodo' => 'dinheiro',
                'valor' => 100.00,
                'status' => 'pendente',
                'comprovante' => '',
                'data_pagamento' => null,
            ]);
        }
    }
}
