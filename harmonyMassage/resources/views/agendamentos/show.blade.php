<x-app-layout>
<div class="container">
    <h2>Detalhes do Agendamento</h2>

    <ul class="list-group mb-3">
        <li class="list-group-item"><strong>Cliente:</strong> {{ $agendamento->cliente->name }}</li>
        <li class="list-group-item"><strong>Massagista:</strong> {{ $agendamento->massagista->name }}</li>
        <li class="list-group-item"><strong>Data:</strong> {{ \Carbon\Carbon::parse($agendamento->data)->format('d/m/Y') }}</li>
        <li class="list-group-item"><strong>Horário:</strong> {{ $agendamento->horario }}</li>
        <li class="list-group-item"><strong>Observação:</strong> {{ $agendamento->observacao }}</li>
        <li class="list-group-item"><strong>Status:</strong> {{ ucfirst($agendamento->status) }}</li>
    </ul>

    <a href="{{ route('agendamentos.index') }}" class="btn btn-secondary">Voltar</a>
</div>
</x-app-layout>