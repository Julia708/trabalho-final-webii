<x-app-layout>


<div class="max-w-md mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-semibold mb-4 text-center">Avaliar Atendimento</h2>

    <form method="POST" action="{{ route('avaliacoes.store') }}">
        @csrf
        <input type="hidden" name="agendamento_id" value="{{ $agendamento->id }}">

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1">Nota</label>
            <div class="flex flex-row-reverse justify-center gap-1 text-yellow-400 text-2xl">
                @for ($i = 5; $i >= 1; $i--)
                    <input type="radio" id="star{{ $i }}" name="nota" value="{{ $i }}" class="hidden peer" required>
                    <label for="star{{ $i }}" title="{{ $i }} estrelas" class="cursor-pointer peer-checked:text-yellow-500">
                        &#9733;
                    </label>
                @endfor
            </div>
        </div>

        <div class="mb-4">
            <label for="comentario" class="block text-sm font-medium text-gray-700 mb-1">Comentário</label>
            <textarea name="comentario" rows="3"
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
        </div>

        <button type="submit"
            class="w-full bg-blue-600 text-white font-medium py-2 px-4 rounded hover:bg-blue-700 transition">
            Enviar Avaliação
        </button>
    </form>
</div>

</x-app-layout>
