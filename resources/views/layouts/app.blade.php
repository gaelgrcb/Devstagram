<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devstagram</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100">
    <header class="p-5 border-b bg-white shadow">

        <div class="container mx-auto flex justify-between">
        <h1 class="text-3xl font-[1000]" >
            <a href="/">
                DevStagram
            </a>
        </h1>

        <nav class="flex gap-3 items-center">
            <a class="font-bold uppercase text-gray-600" href="">Login</a>
            <a href="{{ route('register') }}" class="font-bold uppercase text-gray-600">Crear Cuenta</a>
        </nav>

        </div>
    </header>

    <main class="container mx-auto mt-10">
        <h2 class="text-center text-3xl mb-10 font-[1000]">
            @yield('titulo')
        </h2>
        @yield('contenido')
    </main>

    <footer class="text-center p-5 text-gray-500 font-bold uppercase">
        DevStagram -Todos los derechos reservados
        {{now()->year}}
    </footer>

</body>
</html>
