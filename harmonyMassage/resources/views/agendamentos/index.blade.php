<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Meus Agendamentos') }}
            </h2>
        </x-slot>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

        <a href="{{ route('agendamentos.create') }}"
            class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded mb-4">
            Novo Agendamento
        </a>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded shadow-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="text-left px-4 py-2 border-b">Massagista</th>
                        <th class="text-left px-4 py-2 border-b">Data</th>
                        <th class="text-left px-4 py-2 border-b">Horário</th>
                        <th class="text-left px-4 py-2 border-b">Status</th>
                        <th class="text-left px-4 py-2 border-b">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($agendamentos as $agendamento)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 border-b">{{ $agendamento->massagista->name }}</td>
                            <td class="px-4 py-2 border-b">{{ \Carbon\Carbon::parse($agendamento->data)->format('d/m/Y') }}
                            </td>
                            <td class="px-4 py-2 border-b">{{ $agendamento->horario }}</td>
                            <td class="px-4 py-2 border-b">{{ ucfirst($agendamento->status) }}</td>
                            <td class="px-4 py-2 border-b">
                                <a href="{{ route('agendamentos.show', $agendamento->id) }}"
                                    class="inline-block bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium py-1 px-3 rounded">
                                    Ver
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>