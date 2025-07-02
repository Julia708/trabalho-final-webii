@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto mt-8">
        <h1 class="text-2xl font-semibold mb-4">Bem-vinda, {{ auth()->user()->name }}!</h1>
        <p class="text-gray-600">Aqui você pode agendar sessões, visualizar suas massagens e editar seu perfil.</p>
    </div>
@endsection
