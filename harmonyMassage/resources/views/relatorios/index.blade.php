<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Relatórios') }}
        </h2>
    </x-slot>

    <div class="max-w-md mx-auto p-6 rounded shadow mt-6 dark:bg-gray-800">
    <h2 class="text-2xl font-semibold mb-4 text-center text-gray-900 dark:text-gray-300">Emitir Relatório de Agendamentos</h2>

    <form action="{{ route('relatorios.emitir') }}" method="POST">
        @csrf
        <button type="submit"
            class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition">
            Gerar PDF
        </button>
    </form>
</div>

</x-app-layout>