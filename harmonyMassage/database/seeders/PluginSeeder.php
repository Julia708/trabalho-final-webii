<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plugin;

class PluginSeeder extends Seeder
{
    public function run(): void
    {
        Plugin::create([
            'nome' => 'Facebook Chat',
            'tipo' => 'social',
            'descricao' => 'Plugin de chat para atendimento via Facebook Messenger.',
            'ativo' => true,
        ]);

        Plugin::create([
            'nome' => 'Instagram Feed',
            'tipo' => 'social',
            'descricao' => 'Exibe o feed do Instagram da empresa na página inicial.',
            'ativo' => false,
        ]);

        Plugin::create([
            'nome' => 'PagSeguro',
            'tipo' => 'pagamento',
            'descricao' => 'Integração com o PagSeguro para pagamentos online.',
            'ativo' => true,
        ]);

        Plugin::create([
            'nome' => 'PayPal',
            'tipo' => 'pagamento',
            'descricao' => 'Plugin de pagamento usando PayPal.',
            'ativo' => false,
        ]);
    }
}
