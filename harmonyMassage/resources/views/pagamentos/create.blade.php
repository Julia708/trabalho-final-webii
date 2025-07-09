<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Realizar Pagamento</h2>
    </x-slot>

    <div class="p-6">
        <form action="{{ route('pagamentos.store') }}" method="POST">
            @csrf

            <input type="hidden" name="agendamento_id" value="{{ $agendamento->id }}">

            <div>
                <label>Valor</label>
                <input type="text" name="valor" class="border rounded p-1" value="{{ $agendamento->valor ?? '100.00' }}">
            </div>

            <div class="mt-2">
                <label>Forma de Pagamento</label>
                <select name="metodo">
                    <option value="pix">PIX</option>
                    <option value="cartao">Cartão</option>
                    <option value="dinheiro">Dinheiro</option>
                </select>
            </div>

            <div class="mt-4">
                <button class="bg-blue-500 text-white px-4 py-2 rounded">Pagar</button>
            </div>
        </form>
    </div>
</x-app-layout>
