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
            <div class="mx-auto sm:px-6 lg:px-8">
                <div class="bg-slate-300 overflow-hidden shadow sm:rounded-lg">
                    <form method="POST" class="p-6 flex flex-col">
                        @csrf
                        <div class="flex flex-col justify-between">
                            <div class="mb-4 flex flex-col">
                                <label for="nome-do-personagem" class="font-semibold">Nome do Personagem:</label>
                                <input id="nome-do-personagem" type="number" name="nome-do-personagem" class="w-full border border-gray-300 p-2 rounded" placeholder="Digite o nome do seu personagem">
                            </div>

                            <div class="mb-4 flex gap-2">
                                <div class="w-16">
                                    <label for="forca" class="font-semibold">For:</label>
                                    <input id="forca" type="number" name="forca" class="w-full border border-gray-300 p-2 rounded" placeholder="10">
                                </div>

                                <div class="w-16">
                                    <label for="Destreza" class="font-semibold">Des:</label>
                                    <input id="Destreza" type="number" name="Destreza" class="w-full border border-gray-300 p-2 rounded" placeholder="10">
                                </div>

                                <div class="w-16">
                                    <label for="Constituição" class="font-semibold">Cons:</label>
                                    <input id="Constituição" type="number" name="Constituição" class="w-full border border-gray-300 p-2 rounded" placeholder="10">
                                </div>

                                <div class="w-16">
                                    <label for="Inteligência" class="font-semibold">Int:</label>
                                    <input id="Inteligência" type="number" name="Inteligência" class="w-full border border-gray-300 p-2 rounded" placeholder="10">
                                </div>

                                <div class="w-16">
                                    <label for="Sabedoria" class="font-semibold">Sab:</label>
                                    <input id="Sabedoria" type="number" name="Sabedoria" class="w-full border border-gray-300 p-2 rounded" placeholder="10">
                                </div class="w-52">

                                <div class="w-16">
                                    <label for="Carisma" class="font-semibold">Car:</label>
                                    <input id="Carisma" type="number" name="Carisma" class="w-full border border-gray-300 p-2 rounded" placeholder="10">
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-between">
                            <div class="mb-4">
                                <label for="raca" class="font-semibold">Raça:</label>
                                <select id="raca" name="raca" class="w-full border border-gray-300 p-2 rounded">
                                    <option value="invalido" selected disabled>Escolha sua Raça</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="classe" class="font-semibold">Classe:</label>
                                <select id="classe" name="classe" class="w-full border border-gray-300 p-2 rounded">
                                    <option value="invalido" selected disabled>Escolha sua Classe</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex justify-between">
                            <div class="mb-4 w-full">
                                <label for="antecedente" class="font-semibold">Antecedente:</label>
                                <select id="antecedente" name="antecedente" class="w-full border border-gray-300 p-2 rounded" disabled>
                                    <option value="invalido" selected disabled>Escolha seu Antecendente</option>
                                </select>
                            </div>
                        </div>

                        <input class="bg-red-600 mt-2 py-2 px-6 text-xl rounded-full text-white font-semibold cursor-pointer" type="submit" value="Gerar Ficha!">
                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-slate-300 w-full shadow fixed bottom-0 flex">
        <div class="mx-auto max-w-screen-xl p-4">
            <span class="text-sm text-gray-500 text-center">© {{ now()->year }} <a href="#" class="hover:underline">Guide2Sheets</a>. Todos os direitos reservados.
            </span>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
        // REQUISIÇÕES
        $(document).ready(function() {

            function request(url, callback) {
                $.ajax({
                    url: "https://www.dnd5eapi.co/api/" + url,
                    method: "GET",
                    success: function(data) {
                        callback(data);
                    },
                    error: function(error) {
                        console.log("Erro: " + error);
                    },
                });
            }

            request("classes", function(data) {
                data.results.forEach(classes => {
                    $('#classe').append('<option value="' + classes.name + '">' + classes.name + '</option>');
                });
            });

            request("races", function(data) {
                data.results.forEach(racas => {
                    $('#raca').append('<option value="' + racas.name + '">' + racas.name + '</option>');
                });
            });

            request("backgrounds", function(data) {
                data.results.forEach(antecendente => {
                    $('#antecedente').append('<option value="' + antecendente.name + '">' + antecendente.name + '</option>');
                });
            });

        });
    </script>

    <script>
        // CONFIGURAÇÕES
        $("#classe, #raca").on("change", function() {
            var classe = $('#classe').val();
            var raca = $('#raca').val();

            if (classe != null && raca != null) {
                $("#antecedente, #nivel").removeAttr("disabled");
            } else {
                $("#antecedente, #nivel").attr("disabled", "disabled");
            }
        });
    </script>
</body>

</html>
