@extends('layout.app')

@section('content')
    <div class="container mx-auto flex w-full items-center">
        <p class="flex w-full items-center text-green-600 bg-white text-xl font-bold py-3" role="alert">
            {{ session('message') }}</p>
    </div>
    <div class="container mx-auto">  
        <div class="grid grid-cols-2 gap-3 bg-white ">    
             @foreach($civilizations as $civilization)
                <div class="col-span-1 p-6 my-6 font-sans overflow-hidden shadow-lg bg-slate-100 rounded">
                    <h1 class="place-items-center text-2xl font-bold">{{ $civilization->name }}</h1><br>
                    <h1 class="place-items-center"><span class="font-bold">Expansion: </span>{{ $civilization->expansion }}</h1>
                    <h1 class="place-items-center"><span class="font-bold">Army Type: </span>{{ $civilization->army_type }}</h1>
                    <h1 class="place-items-center"><span class="font-bold">Team Bonus: </span>{{ $civilization->team_bonus }}</h1><br>
                    <h1 class="place-items-center h-28"><span class="font-bold">Civilization Bonus: </span>{{ $civilization->civilization_bonus }}</h1>
                    <br>
                    <div class="flex">
                        <form action='/civilizations/{{ $civilization->id }}' method="GET">
                            <button class="h-10 px-5 m-2 text-blue-100 transition-colors duration-150 bg-blue-700 rounded-lg focus:shadow-outline hover:bg-blue-800">Update Civilization</button>
                            @csrf
                        </form>
                        <form action="/civilizations/{{ $civilization->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="h-10 px-5 m-2 text-red-100 transition-colors duration-150 bg-red-700 rounded-lg focus:shadow-outline hover:bg-red-800">Delete Civilization</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection