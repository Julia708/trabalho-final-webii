<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harmony Massage</title>

    <!-- Fonte suave e moderna -->
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
    <div
        class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
        <main class="w-full max-w-3xl text-center">
            {{-- Conteúdo principal entra aqui --}}
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis qui explicabo perspiciatis atque maiores
            autem tempora aliquam dolores. Quis aliquid, consequuntur ut ea aspernatur iure fuga omnis unde itaque
            officia!
        </main>
    </div>

</body>

</html>