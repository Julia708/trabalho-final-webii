<x-app-layout>
<div class="container">
    <h2>Meus Agendamentos</h2>

    <a href="{{ route('agendamentos.create') }}" class="btn btn-primary mb-3">Novo Agendamento</a>

    <table>
        <thead>
            <tr>
                <th>Massagista</th>
                <th>Data</th>
                <th>Horário</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($agendamentos as $agendamento)
                <tr>
                    <td>{{ $agendamento->massagista->name }}</td>
                    <td>{{ \Carbon\Carbon::parse($agendamento->data)->format('d/m/Y') }}</td>
                    <td>{{ $agendamento->horario }}</td>
                    <td>{{ ucfirst($agendamento->status) }}</td>
                    <td>
                        <a href="{{ route('agendamentos.show', $agendamento->id) }}" class="btn btn-sm btn-info">Ver</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>
