<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecomerce</title>
    @vite('resources/css/app.css')
    @stack('styles')
</head>
<body>
    <main>
        {{$slot}}
    </main>
</body>
</html>