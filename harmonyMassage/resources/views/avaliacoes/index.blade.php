<x-app-layout>
    <div class="max-w-2xl mx-auto p-4">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Lista de Avaliações') }}
            </h2>
        </x-slot>

        @foreach ($avaliacoes as $avaliacao)
            <div class="bg-white shadow rounded p-4 mb-4">
                <h5 class="text-lg font-medium mb-2">Avaliação da Sessão {{ $avaliacao->agendamento_id }}</h5>

                <div class="flex space-x-1 text-yellow-400 text-xl">
                    @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= $avaliacao->nota)
                            <span>&#9733;</span>
                        @else
                            <span class="text-gray-300">&#9733;</span>
                        @endif
                    @endfor
                </div>

                @if ($avaliacao->comentario)
                    <p class="mt-3 text-gray-700">{{ $avaliacao->comentario }}</p>
                @endif
            </div>
        @endforeach
    </div>

</x-app-layout>