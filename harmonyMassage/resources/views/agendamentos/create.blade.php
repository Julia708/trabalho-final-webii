<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Novo Agendamento') }}
            </h2>
        </x-slot>

    <div class="max-w-2xl mx-auto px-4 py-8">

    <form action="{{ route('agendamentos.store') }}" method="POST" class="mt-6 space-y-6">
        @csrf

        <div>
            <label for="massagista_id" class="block text-sm font-medium text-gray-700 mb-1">Massagista</label>
            <select name="massagista_id" id="massagista_id" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                @foreach($massagistas as $massagista)
                    <option value="{{ $massagista->id }}">{{ $massagista->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="data" class="block text-sm font-medium text-gray-700 mb-1">Data</label>
            <input type="date" name="data" id="data" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label for="horario" class="block text-sm font-medium text-gray-700 mb-1">Horário</label>
            <input type="time" name="horario" id="horario" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-semibold px-5 py-2 rounded">
                Agendar
            </button>
        </div>
    </form>

</div>

</x-app-layout>
