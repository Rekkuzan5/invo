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
    <nav class="p-6 bg-gray-800">
        <div class="flex justify-between container mx-auto items-center">
            <a href='/' class="font-bold text-3xl text-white">Age of Empires II - Civilizations </a>
            <form action='/civilizations/create' method="GET">
            <button class="h-10 px-5 w-50 text-green-100 transition-colors duration-150 bg-green-700 rounded-lg focus:shadow-outline hover:bg-green-800" type="submit">Create Civilization</button>                  
            </form>
        </div>
    </nav>
    @yield('content')
</body>
</html>