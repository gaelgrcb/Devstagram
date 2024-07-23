<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devstagram</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1 class="text-4xl font-extrabold">@yield('titulo')</h1>
    <hr>
    @yield('contenido')
</body>
</html>
