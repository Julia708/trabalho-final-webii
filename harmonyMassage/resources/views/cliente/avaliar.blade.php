@extends('layouts.app')

@section('content')
    <div class="max-w-xl mx-auto mt-8">
        <h2 class="text-xl font-semibold mb-4">Avaliar Sessão</h2>

        <form method="POST" action="{{ route('avaliacoes.store') }}">
            @csrf

            {{-- Campos para avaliação, nota, comentário --}}
        </form>
    </div>
@endsection
