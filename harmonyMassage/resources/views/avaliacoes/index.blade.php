<x-app-layout>
<div class="container">
    <h2>Lista de Avaliações</h2>

    @foreach ($avaliacoes as $avaliacao)
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Avaliação do Agendamento </h5>
            
            <div class="star-display">
                @for ($i = 1; $i <= 5; $i++)
                    @if ($i <= $avaliacao->nota)
                        <span class="text-warning">&#9733;</span> 
                    @else
                        <span class="text-muted">&#9733;</span> 
                    @endif
                @endfor
            </div>

            @if ($avaliacao->comentario)
                <p class="mt-2">{{ $avaliacao->comentario }}</p>
            @endif
        </div>
    </div>
@endforeach

</div>
</x-app-layout>

<style>
    .star-display {
        font-size: 1.5rem;
    }
</style>
