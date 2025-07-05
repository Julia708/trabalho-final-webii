<x-app-layout>
    <div class="container">
        
        <h2>Novo Agendamento</h2>

        <form action="{{ route('agendamentos.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="massagista_id" class="form-label">Massagista</label>
                <select name="massagista_id" class="form-control" required>
                    @foreach($massagistas as $massagista)
                        <option value="{{ $massagista->id }}">{{ $massagista->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="data" class="form-label">Data</label>
                <input type="date" name="data" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="horario" class="form-label">Horário</label>
                <input type="time" name="horario" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Agendar</button>
        </form>
    </div>
</x-app-layout>
