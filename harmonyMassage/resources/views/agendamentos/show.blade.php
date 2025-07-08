<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detalhes do Agendamento') }}
        </h2>
    </x-slot>

<ul class="space-y-2 mb-6 max-w-md mx-auto">
    <li class="bg-white p-4 rounded shadow border"><strong>Cliente:</strong> {{ $agendamento->cliente->name }}</li>
    <li class="bg-white p-4 rounded shadow border"><strong>Massagista:</strong> {{ $agendamento->massagista->name }}</li>
    <li class="bg-white p-4 rounded shadow border"><strong>Data:</strong> {{ \Carbon\Carbon::parse($agendamento->data)->format('d/m/Y') }}</li>
    <li class="bg-white p-4 rounded shadow border"><strong>Horário:</strong> {{ $agendamento->horario }}</li>
    <li class="bg-white p-4 rounded shadow border"><strong>Observação:</strong> {{ $agendamento->observacao }}</li>
    <li class="bg-white p-4 rounded shadow border"><strong>Status:</strong> {{ ucfirst($agendamento->status) }}</li>
</ul>

<a href="{{ route('agendamentos.index') }}" class="inline-block px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition">
    Voltar
</a>

</x-app-layout>