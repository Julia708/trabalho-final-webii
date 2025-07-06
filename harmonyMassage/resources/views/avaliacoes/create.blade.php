<x-app-layout>


<div class="container">
    <h2>Avaliar Atendimento</h2>

    <form method="POST" action="{{ route('avaliacoes.store') }}">
        @csrf
        <input type="hidden" name="agendamento_id" value="{{ $agendamento->id }}">

        <div class="mb-3">
            <label for="nota" class="form-label">Nota</label>
            <div class="star-rating" required>
                @for ($i = 1; $i <= 5; $i++)
                    <input type="radio" id="star{{ $i }}" name="nota" value="{{ $i }}" required>
                    <label for="star{{ $i }}" title="{{ $i }} estrelas">&#9733;</label>
                @endfor
            </div>
        </div>

        <div class="mb-3">
            <label for="comentario" class="form-label">Comentário</label>
            <textarea class="form-control" name="comentario" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar Avaliação</button>
    </form>
</div>
</x-app-layout>

<style>
    .star-rating {
        direction: rtl;
        display: inline-flex;
        font-size: 2rem;
    }

    .star-rating input[type="radio"] {
        display: none;
    }

    .star-rating label {
        color: #ccc;
        cursor: pointer;
    }

    .star-rating input[type="radio"]:checked ~ label {
        color: gold;
    }

    .star-rating label:hover,
    .star-rating label:hover ~ label {
        color: gold;
    }
</style>