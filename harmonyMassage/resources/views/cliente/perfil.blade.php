@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto p-6 bg-white shadow-md rounded-md mt-8">
        <h2 class="text-2xl font-bold mb-6">Meu Perfil</h2>

        @if (session('status') === 'profile-updated')
            <div class="mb-4 text-green-600">
                Perfil atualizado com sucesso!
            </div>
        @endif

        <form method="POST" action="{{ route('cliente.perfil.update') }}">
            @csrf
            @method('PUT')

            <!-- Nome -->
            <div class="mb-4">
                <label for="name" class="block font-medium text-sm text-gray-700">Nome</label>
                <input id="name" name="name" type="text" value="{{ old('name', auth()->user()->name) }}" required
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                @error('name')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- E-mail -->
            <div class="mb-4">
                <label for="email" class="block font-medium text-sm text-gray-700">E-mail</label>
                <input id="email" name="email" type="email" value="{{ old('email', auth()->user()->email) }}" required
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                @error('email')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Telefone -->
            <div class="mb-6">
                <label for="telefone" class="block font-medium text-sm text-gray-700">Telefone</label>
                <input id="telefone" name="telefone" type="text" value="{{ old('telefone', auth()->user()->telefone) }}"
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                @error('telefone')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit"
                        class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    Salvar
                </button>
            </div>
        </form>
    </div>
@endsection
