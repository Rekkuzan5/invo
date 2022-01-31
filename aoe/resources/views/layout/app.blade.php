<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Age of Empires</title>

    <link rel='stylesheet' href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav class="p-6 bg-gray-800 flex">
        <div class="container mx-auto">
            <a href='/' class="font-bold text-3xl text-white">Age of Empires II - Civilizations </a>
        </div>
    </nav>
    @yield('content')
</body>
</html>