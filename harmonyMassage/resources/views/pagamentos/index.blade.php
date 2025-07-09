<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pagamentos') }}
        </h2>
    </x-slot>

<div class="py-8 max-w-5xl mx-auto">
        <div class="bg-white shadow-sm sm:rounded-lg p-6">
            <h3 class="text-lg font-bold mb-4">Próximos pagamentos</h3>

            @if ($pagamentos->isEmpty())
                <p>Nenhum pagamento encontrado.</p>
            @else
                <table class="min-w-full table-auto border">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="px-4 py-2 text-left">Agendamento</th>
                            <th class="px-4 py-2 text-left">Valor</th>
                            <th class="px-4 py-2 text-left">Forma</th>
                            <th class="px-4 py-2 text-left">Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pagamentos as $pagamento)
                            <tr class="border-t">
                                <td class="px-4 py-2">{{ $pagamento->agendamento->id }}</td>
                                <td class="px-4 py-2">R$ {{ number_format($pagamento->valor, 2, ',', '.') }}</td>
                                <td class="px-4 py-2">{{ ucfirst($pagamento->metodo) }}</td>
                                <td class="px-4 py-2">{{ $pagamento->data_pagamento }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</x-app-layout>
