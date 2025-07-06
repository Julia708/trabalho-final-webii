<x-app-layout>
<div class="container">
    <h2>Emitir Relatório de Agendamentos</h2>
    <form action="{{ route('relatorios.emitir') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary">Gerar PDF</button>
    </form>
</div>
</x-app-layout>
