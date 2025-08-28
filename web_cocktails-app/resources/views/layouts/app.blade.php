<!--<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <header>
        <nav class=""></nav>
    </header>

    @yield('content')

    <footer></footer>
</body>
</html>-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cocktail App')</title>
    <!-- Tailwind vía CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900 flex flex-col min-h-screen">

    <!-- Navbar -->
    <header class="bg-yellow-600 text-white p-4 flex justify-between items-center">
        <!-- Título a la izquierda -->
        <h1 class="text-xl font-bold">🍸 Cocktail App</h1>

        <!-- Botones alineados a la derecha -->
        <nav class="flex space-x-4">
            <a href="{{ route('cocktails.index') }}"
               class="px-4 py-2 bg-blue-500 rounded-xl shadow hover:bg-blue-700 transition">
               Cocktails
            </a>

            <a href="{{ route('ingredientes.index') }}"
               class="px-4 py-2 bg-green-500 rounded-xl shadow hover:bg-green-700 transition">
               Ingredientes
            </a>
        </nav>
    </header>

    <!-- Contenido -->
    <main class="flex-grow container mx-auto p-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center p-3">
        pagi for cocktails
    </footer>

</body>
</html>

