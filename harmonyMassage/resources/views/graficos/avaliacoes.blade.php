<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Gráfico de Avaliações</h2>
    </x-slot>

    <div class="py-10 max-w-4xl mx-auto">
        <canvas id="graficoAvaliacao" width="400" height="200"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('graficoAvaliacao').getContext('2d');

        const grafico = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['1 estrela', '2 estrelas', '3 estrelas', '4 estrelas', '5 estrelas'],
                datasets: [{
                    label: 'Quantidade de avaliações',
                    data: @json($avaliacoes),
                    backgroundColor: 'rgba(59, 130, 246, 0.7)',
                    borderColor: 'rgba(59, 130, 246, 1)',
                    borderWidth: 1,
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 1,
                    }
                }
            }
        });
    </script>
</x-app-layout>
