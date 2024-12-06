<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Lista de Animais' }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>{{ $header ?? 'Lista de Animais' }}</h1>
    </header>

    <main>
        {{ $slot }}
    </main>

    <footer>
        <!-- Aqui você pode adicionar um rodapé se necessário -->
    </footer>
</body>
</html>
