<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="h-screen font-sans text-gray-900 antialiased overflow-hidden">
        <main class="mt-6 flex flex-col justify-center items-center h-3/4">
            <div class="py-12">
                <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-slate-300 overflow-hidden shadow sm:rounded-lg">
                        <div class="text-xl p-6 text-gray-900 text-center">
                            Nossa plataforma fornece uma ferramenta ideal para facilitar a criação de fichas de personagens no sistema de D&D 5E!
                        </div>
                    </div>
                </div>
            </div>
            <a href="/ficha" class="bg-red-600 py-2 px-6 text-xl rounded-full text-white font-semibold">
                Criar ficha!
            </a>
        </main>

        <footer class="bg-slate-300 w-full shadow fixed bottom-0 flex">
            <div class="mx-auto max-w-screen-xl p-4">
                <span class="text-sm text-gray-500 text-center">© {{ now()->year }} <a href="#" class="hover:underline">Guide2Sheets</a>. Todos os direitos reservados.
                </span>
            </div>
        </footer>
    </body>
</html>
