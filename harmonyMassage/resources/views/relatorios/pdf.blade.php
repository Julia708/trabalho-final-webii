<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: sans-serif; font-size: 12px; }
        h1 { text-align: center; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #000; padding: 6px; text-align: left; }
    </style>
</head>
<body>
    <h1>Relatório de Agendamentos</h1>

    <table>
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Massagista</th>
                <th>Data</th>
                <th>Horário</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($agendamentos as $agendamento)
                <tr>
                    <td>{{ $agendamento->cliente->name }}</td>
                    <td>{{ $agendamento->massagista->name }}</td>
                    <td>{{ \Carbon\Carbon::parse($agendamento->data)->format('d/m/Y') }}</td>
                    <td>{{ $agendamento->horario }}</td>
                    <td>{{ ucfirst($agendamento->status) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
