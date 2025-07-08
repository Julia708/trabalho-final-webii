<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Minha Agenda
        </h2>
    </x-slot>

    <div class="py-8 max-w-5xl mx-auto">
        <div class="bg-white shadow-sm sm:rounded-lg p-6">
            <h3 class="text-lg font-bold mb-4">Próximos Agendamentos</h3>

            @if ($agendamentos->isEmpty())
                <p>Nenhum agendamento encontrado.</p>
            @else
                <table class="min-w-full table-auto border">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="px-4 py-2 text-left">Cliente</th>
                            <th class="px-4 py-2 text-left">Serviço</th>
                            <th class="px-4 py-2 text-left">Data</th>
                            <th class="px-4 py-2 text-left">Horário</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($agendamentos as $agendamento)
                            <tr class="border-t">
                                <td class="px-4 py-2">{{ $agendamento->cliente->name ?? 'Cliente' }}</td>
                                <td class="px-4 py-2">{{ $agendamento->servico }}</td>
                                <td class="px-4 py-2">{{ \Carbon\Carbon::parse($agendamento->data)->format('d/m/Y') }}</td>
                                <td class="px-4 py-2">{{ $agendamento->hora }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</x-app-layout>
