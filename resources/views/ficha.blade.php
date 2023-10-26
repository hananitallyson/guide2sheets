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
            <div class="py-12 w-96">
                <div class="mx-auto sm:px-6 lg:px-8">
                    <div class="bg-gray-100 overflow-hidden shadow sm:rounded-lg">
                        <form method="POST" class="p-8 flex flex-col">
                            @csrf
                            <div class="flex justify-between gap-2">
                                <div class="mb-4">
                                    <label for="raca" class="font-semibold">Raça:</label>
                                    <select id="raca" name="raca" class="w-full border border-gray-300 p-2 rounded">
                                        <option value="humano">Humano</option>
                                        <option value="elfo">Elfo</option>
                                        <option value="anão">Anão</option>
                                        <option value="halfling">Halfling</option>
                                        <!-- Adicione mais opções de raça aqui -->
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label for="classe" class="font-semibold">Classe:</label>
                                    <select id="classe" name="classe" class="w-full border border-gray-300 p-2 rounded">
                                        <option value="guerreiro">Guerreiro</option>
                                        <option value="mago">Mago</option>
                                        <option value="clérigo">Clérigo</option>
                                        <option value="ladino">Ladino</option>
                                        <!-- Adicione mais opções de classe aqui -->
                                    </select>
                                </div>
                            </div>

                            <div class="flex justify-between gap-2">
                                <div class="mb-4">
                                    <label for="antecedente" class="font-semibold">Antecedente:</label>
                                    <select id="antecedente" name="antecedente" class="w-full border border-gray-300 p-2 rounded">
                                        <option value="nobre">Nobre</option>
                                        <option value="forasteiro">Forasteiro</option>
                                        <option value="artesão">Artesão</option>
                                        <option value="acólito">Acólito</option>
                                        <!-- Adicione mais opções de antecedente aqui -->
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label for="nivel" class="font-semibold">Nível:</label>
                                    <select id="nivel" name="nivel" class="w-full border border-gray-300 p-2 rounded">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <!-- Adicione mais opções de nível aqui -->
                                    </select>
                                </div>
                            </div>

                            <input class="bg-red-600 mt-2 py-2 px-6 text-xl rounded-full text-white font-semibold cursor-pointer" type="submit" value="Gerar Ficha!">
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <footer class="bg-gray-100 w-full shadow fixed bottom-0 flex">
            <div class="mx-auto max-w-screen-xl p-4">
                <span class="text-sm text-gray-500 text-center">© {{ now()->year }} <a href="#" class="hover:underline">Guide2Sheets</a>. Todos os direitos reservados.
                </span>
            </div>
        </footer>
    </body>
</html>
