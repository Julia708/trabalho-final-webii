<x-app-layout>
    <div class="container">
        <h2>Pagamentos</h2>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Valor</th>
                    <th>Forma de Pagamento</th>
                    <th>Status</th>
                    <th>Data do Pagamento</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pagamentos as $pagamento)
                    <tr>
                        <td>{{ $pagamento->agendamento->cliente->name ?? 'N/A' }}</td>
                        <td>R$ {{ number_format($pagamento->valor, 2, ',', '.') }}</td>
                        <td>{{ ucfirst($pagamento->forma_pagamento) }}</td>
                        <td>
                            @if($pagamento->status === 'pago')
                                <span class="badge bg-success">Pago</span>
                            @else
                                <span class="badge bg-warning text-dark">Pendente</span>
                            @endif
                        </td>
                        <td>{{ \Carbon\Carbon::parse($pagamento->data_pagamento)->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('pagamentos.show', $pagamento->id) }}" class="btn btn-sm btn-info">Ver</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>