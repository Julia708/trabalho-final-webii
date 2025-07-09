<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harmony Massage</title>

    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="bg-[#FDFDFC] light:bg-[#0a0a0a] text-[#1b1b18] light:text-[#EDEDEC] min-h-screen flex flex-col items-center justify-center p-6 lg:p-8 font-sans">

    @if (Route::has('login'))
        <nav class="w-full max-w-4xl mb-8 flex justify-end space-x-4 text-sm">
            @auth
                <a href="{{ url('/dashboard') }}"
                    class="px-4 py-2 border border-[#ccc] rounded hover:border-[#999] light:border-[#3E3E3A] light:hover:border-[#62605b]">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}" class="px-4 py-2 rounded hover:underline">
                    Entrar
                </a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="px-4 py-2 border border-[#ccc] rounded hover:border-[#999] light:border-[#3E3E3A] light:hover:border-[#62605b]">
                        Cadastre-se
                    </a>
                @endif
            @endauth
        </nav>
    @endif
    <div class="flex items-center justify-center w-full min-h-screen bg-gradient-to-br to-white">
        <main
            class="w-full max-w-3xl px-6 py-12 bg-white rounded-lg shadow-lg text-center transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <h1 class="text-3xl font-bold text-purple-500 mb-6">Bem-vinda à Harmony Massage</h1>
            <p class="text-gray-700 text-lg">
                Aqui, seu bem-estar é a nossa prioridade. Agende sessões de massagem com profissionais qualificados e
                viva uma experiência única de relaxamento, conforto e harmonia. Cuidar de você nunca foi tão fácil.
            </p>
        </main>
    </div>

    </div>

</body>

</html>